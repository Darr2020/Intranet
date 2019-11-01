<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\auth;
use Illuminate\Http\Request;
use App\Post;
use App\Task;
use App\Tag;
use Carbon\Carbon;
use Alert;
use Illuminate\Support\Facades\Input;

class PostController extends Controller{

	public function __construct(){
		$this->middleware('auth');
	}

	public function posts(Request $request){			
		$titulo = "Noticias";

		$title = $request->get('title');

		$posts = Post::orderBy('id', 'DESC')
			->title($title)
			->where('state', 'PUBLISHED')
			->paginate(12);

		$tasks = Task::where('user_id', auth()->user()->id)
			->orderBy("id", "desc")
			->take(5)
			->get();

		return view('inicio', compact('posts', 'tasks', 'titulo'));							
	}

	public function tag($slug){
		$titulo = "Etiquetas";
		$posts = Tag::where('slug',$slug)		
			->with('posts')->get();

		return view('inicio', compact('posts','titulo'));
	}

	public function post($slug){
		$titulo = "Noticia";
		$post = Post::where('slug', $slug)->first();
		return view('users.post', compact('post', 'titulo'));
	}

	public function toggleLike($slug){
        $post = Post::find($slug);	
		$post->toggleLikeBy();

		if ($post->liked) {
			return response()->json([
				'like' => [
					'isLiked' => true,
					'likes'   => $post->likesCount(),
				]
			]);
		}else{
			return response()->json([
				'like' => [
					'isLiked' => false,
					'likes'   => $post->likesCount(),
				]
			]);
		}
        
    }

    public function unlike(Post $post)
    {
        $post->unlikeBy();

        return back();
    }
}