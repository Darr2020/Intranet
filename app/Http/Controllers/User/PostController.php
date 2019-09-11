<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\auth;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

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

		return view('inicio', compact('posts', 'titulo'));				
	}



	public function tag($slug){

		$titulo = "Etiquetas";

		$posts = Post::whereHas('tags', function($query) use($slug){
			$query->where('slug', $slug);
		})->orderBy('id', 'DESC')
		  ->where('state', 'PUBLISHED');

		return view('inicio', compact('posts','titulo'));
	}

	public function post($slug){
		$titulo = "Noticia";

		$post = Post::where('slug', $slug)->first();

		return view('users.post', compact('post', 'titulo'));
	}
}