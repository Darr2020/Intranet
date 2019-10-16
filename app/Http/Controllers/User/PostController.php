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


		$posts = Post::where('title', 'like', '%'.Input::get('search').'%')->orderBy('id', 'desc')->paginate(6);

		/*$posts = Post::orderBy('id', 'DESC')
			->title($title)
			->where('state', 'PUBLISHED')
			->paginate(12);*/

		$tasks = Task::orderBy("id", "desc")->take(5)->get();	

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
}