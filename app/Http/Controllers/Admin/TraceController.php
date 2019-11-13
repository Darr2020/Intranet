<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trace;
use Alert;

class TraceController extends Controller{
    
    public function getTrace(){
        $trace = Trace::latest()->paginate();
        if($trace->isEmpty()){
            alert()->warning('No se hayan registros en este momento', '' . auth()->user()->name)->autoclose(4000);
            return back()->with('info','No hay registros de traza aún');
        }else{
            return view('admin.audit.trace',compact('trace'));
        }
    }
}
