<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use App\Notifications\newPost;
use App\Post;
use App\Tag;
=======
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use App\Notifications\newPost;
use Carbon\Carbon;
use App\Post;
use App\Tag;
use App\Trace;
use App\Notification;
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
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


<<<<<<< HEAD
    public function store(PostStoreRequest $request){
        $post = Post::create($request->all());
        $title = $request->title;

        if($request->file('image')){
            $path = $request->file('image');
            $file = $path->storeAs('image', $request->user()->id  .' '. $title);
=======
    public function store(PostStoreRequest $request){     

        DB::beginTransaction();
        try {
            $post = Post::create([
                'title'       => $request->get('title'),
                'user_id'     => $request->get('user_id'),
                'slug'        => $request->get('slug'),
                'summary'     => $request->get('summary'),
                'image'       => $request->get('image'),
                'description' => $request->get('description'),
                'state'       => $request->get('state')
            ]); 

            $notification = Notification::create([
                'who_id' => $request['user_id'],
                'type' => Trace::POST,
                'title' => 'Noticia',
                'description' => Notification::DESCRIPTION_P    
            ]);   

            $trace = Trace::create([
                'user_id' => $request['user_id'],
                'type'=> Trace::POST,
                'description'=>'Ha creado una noticia institucional'
            ]);                
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();                     
            throw $e;
        }

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
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150

            $post->fill(['image' => asset($file)])->save();
        }
       
        $post->tags()->attach($request->get('tags'));
<<<<<<< HEAD

       // notify(new newPost($post));
        
        alert()->success('La noticia ha sido creada correctamente',
            '' . auth()->user()->name)->autoclose(4000);

        return redirect()
            ->route('posts.index', $post->id);
       }
=======
        
        alert()->success('La noticia ha sido creada correctamente', '' . auth()->user()->name)->autoclose(4000);

        return redirect()->route('posts.index', $post->id);
    }
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150

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
<<<<<<< HEAD
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $post->fill($request->all())->save();

=======

        $post = Post::find($id);
        $this->authorize('pass', $post);

        DB::beginTransaction();
        try {
            $post->update([
                'title'       => $request->get('title'),
                'user_id'     => $request->get('user_id'),
                'slug'        => $request->get('slug'),
                'summary'     => $request->get('summary'),
                'image'       => $request->get('image'),
                'description' => $request->get('description'),
                'state'       => $request->get('state')
            ]); 
            $trace = Trace::create([
                'user_id'=> $request->get('user_id'),
                'type'=> Trace::POST,
                'description'=>'Ha editado una noticia institucional'
            ]);                
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();                     
            throw $e;
        }  

        $date = Carbon::now();        
        if($request->get('state')  == 'PUBLISHED'){
            $post->date_published = $date;
            $post->save();
        }else{
            $post->save();
        }    
       
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $post->fill(['image' => asset($path)])->save();
        }

        $post->tags()->sync($request->get('tags'));

<<<<<<< HEAD
        alert()->success('La noticia ha sido editada correctamente',
         '' . auth()->user()->name)->autoclose(4000);

=======
        alert()->success('La noticia ha sido editada correctamente', '' . auth()->user()->name)->autoclose(4000);
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
        return redirect()->route('posts.index', $post->id);
    }

    public function destroy($id){
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $post->delete();
        
<<<<<<< HEAD
        alert()->info('La noticia ha sido eliminada correctamente', '' . auth()->user()->name)->persistent('Cerrar');
=======
        alert()->info('La noticia ha sido eliminada correctamente', '' . auth()->user()->name)->git ('Cerrar');
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
        return back();
    }
}
