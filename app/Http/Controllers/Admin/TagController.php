<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Tag;

class TagController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

     public function index(){
        $titulo = "Tags";
        $tags = Tag::orderBy('id', 'DESC')->paginate();
        return view('admin.tags.index', compact('tags', 'titulo'));
    }

    public function create(){
        $titulo = "Crear";
        return view('admin.tags.create', compact('titulo'));
    }

    public function store(TagStoreRequest $request){
        $tag = Tag::create($request->all());

        alert()->info('La etiqueta ha sido creada correctamente', '' . auth()->user()->name)->persistent('Cerrar');

        return redirect()->route('tags.index', $tag->id);
    }

    public function edit($id){
        $titulo = "Editar";
        $tag = Tag::find($id);
        return view('admin.tags.edit', compact('tag','titulo'));
    }

    public function update(TagUpdateRequest $request, $id){
        $tag = Tag::find($id);
        $tag->fill($request->all())->save();

        alert()->info('La etiqueta ha sido editada correctamente', '' . auth()->user()->name)->persistent('Cerrar');
        return redirect()->route('tags.index', $tag->id);
    }

    public function destroy($id){
        $tag = Tag::find($id)->delete();
        alert()->info('La etiqueta ha sido eliminada correctamente', '' . auth()->user()->name)->persistent('Cerrar');
        return back()->with('info');
    }
}
