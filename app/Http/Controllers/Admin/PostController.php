<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use App\Notifications\newPost;
use Carbon\Carbon;
use App\Post;
use App\Tag;
use App\User;
use Alert;
class PostController extends Controller{

    public function __construct(){        
        $this->middleware('auth');
    }

    public function index(){
        $titulo = "Posts";
       
        $posts = Post::orderBy('id', 'DESC')
            ->where('user_id', auth()->id())
            ->paginate();

        return view('admin.posts.index', compact('posts', 'titulo'));       
    }

    public function create(){
        $titulo = "Crear";
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('admin.posts.create', compact('tags', 'titulo'));
    }


    public function store(PostStoreRequest $request){
    
       $user_id = User::where('id', auth()->id())->value('id');      
           
        $post = new Post([
            'title'       => $request->get('title'),
            'user_id'     => $user_id,
            'slug'        => $request->get('slug'),
            'summary'     => $request->get('summary'),
            'image'       => $request->get('image'),
            'description' => $request->get('description'),
            'state'       => $request->get('state')
        ]); 
        
        $date = Carbon::now();
        if($request->get('state')  == 'PUBLISHED'){
            $post->date_published = $date;
            $post->save();
        }else{
            $post->save();
        }                        
        
        $title = $request->title; //para editar elnombre la imagen subida

        if($request->file('image')){
            $path = $request->file('image');
            $file = $path->storeAs('image', $request->user()->id  .'-'. $title);

            $post->fill(['image' => asset($file)])->save();
        }
       
        $post->tags()->attach($request->get('tags'));
        
        alert()->success('La noticia ha sido creada correctamente',
            '' . auth()->user()->name)->autoclose(4000);

        return redirect()
            ->route('posts.index', $post->id);
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

        $post->title = $request->get('title');
        $post->slug  = $request->get('slug');
        $post->summary = $request->get('summary');
        $post->image = $request->get('image');
        $post->description = $request->get('description');
        $post->state = $request->get('state');  
        
        $date = Carbon::now();
        
        if($request->get('state')  == 'PUBLISHED'){
            $post->date_published = $date;
            $post->save();
        }else{
            $post->save();
        }       

        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $post->fill(['image' => asset($path)])->save();
        }

        $post->tags()->sync($request->get('tags'));

        alert()->success('La noticia ha sido editada correctamente',
         '' . auth()->user()->name)->autoclose(4000);

        return redirect()->route('posts.index', $post->id);
    }

    public function destroy($id){
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $post->delete();
        
        alert()->info('La noticia ha sido eliminada correctamente', '' . auth()->user()->name)->git ('Cerrar');
        return back();
    }
}
