<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\auth;
use Illuminate\Http\Request;
use App\Post;
use App\Task;
<<<<<<< HEAD
use Carbon\Carbon;
use Alert;
=======
use App\Tag;
use App\Notification;
use Carbon\Carbon;
use Alert;
use Illuminate\Support\Facades\Input;
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150

class PostController extends Controller{

	public function __construct(){
		$this->middleware('auth');
	}

<<<<<<< HEAD
	public function posts(Request $request){
=======
	public function posts(Request $request){			
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
		$titulo = "Noticias";

		$title = $request->get('title');

		$posts = Post::orderBy('id', 'DESC')
			->title($title)
			->where('state', 'PUBLISHED')
			->paginate(12);

<<<<<<< HEAD
		$tasks = Task::orderBy("id", "desc")->take(5)->get();	

		return view('inicio', compact('posts', 'tasks', 'titulo'));								
	}

	public function tag($slug){

		$titulo = "Etiquetas";

		$posts = Post::whereHas('tags', function($query) use($slug){
			$query->where('slug', $slug);
		})->orderBy('id', 'DESC')
		  ->where('state', 'PUBLISHED');
=======
		$tasks = Task::where('user_id', auth()->user()->id)
			->orderBy("id", "desc")
			->take(5)
			->get();

			$notifications = Notification::all();

		return view('inicio', compact('posts', 'tasks', 'titulo', 'notifications'));							
	}

	public function tag($slug){
		$titulo = "Etiquetas";
		$posts = Tag::where('slug',$slug)		
			->with('posts')->get();
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150

		return view('inicio', compact('posts','titulo'));
	}

	public function post($slug){
		$titulo = "Noticia";
<<<<<<< HEAD

		$post = Post::where('slug', $slug)->first();

		return view('users.post', compact('post', 'titulo'));
	}
=======
		$post = Post::where('slug', $slug)->first();
		return view('users.post', compact('post', 'titulo'));
	}

	

	/*public function like(Post $post){
        $post->likeBy();
        return back();
    }

    public function unlike(Post $post){
        $post->unlikeBy();
        return back();
    }*/
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
}