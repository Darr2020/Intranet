<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use App\Post;
use App\Tag;
use App\User;

class PostController extends Controller{


    public function __construct(){        
        $this->middleware('auth');
        $this->middleware(['role_or_permission:SuperAdmin|Ver noticia|Crea noticias|Navega noticias']);
    }

     public function index(){
        $titulo = "Posts";
       
        $posts = Post::orderBy('id', 'DESC')
            //Error provoxado aproposito -descomentar
            //->where('user_id', auth()->id())
            ->paginate();
        return view('admin.posts.index', compact('posts', 'titulo'));
    }

    public function create(){
        $titulo = "Crear";
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('admin.posts.create', compact('tags', 'titulo'));
    }

    public function store(PostStoreRequest $request){
        $post = Post::create($request->all());

        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $post->fill(['image' => asset($path)])->save();
        }

        $post->tags()->attach($request->get('tags'));

        return redirect()
            ->route('posts.index', $post->id)
            ->with('info', 'Post creada con éxito');
    }

    public function show($id){
        $titulo = "Post";
        $post = Post::find($id);
        $this->authorize('pass', $post);
        return view('admin.posts.show', compact('post', 'titulo'));
    }

    public function edit($id){
        $titulo = "Editar";
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('admin.posts.edit', compact('post', 'tags', 'titulo'));
    }

    public function update(PostUpdateRequest $request, $id){
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $post->fill($request->all())->save();

        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $post->fill(['image' => asset($path)])->save();
        }

        $post->tags()->sync($request->get('tags'));

        return redirect()->route('posts.index', $post->id)->with('info', 'Post actualizada con éxito');
    }

    public function destroy($id){
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $post->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
