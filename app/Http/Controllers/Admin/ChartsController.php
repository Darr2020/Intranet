<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ChartsController extends Controller{
    
    public function line(){

        $titulo = "Linea";     
   
        $postsYear = DB::table('posts')
            ->select(DB::raw('count(*) as total'), DB::raw('extract(year from created_at) as year'))
            ->groupBy('year')->orderBy('year','ASC')->get();

        return view('admin.charts.line', compact('titulo', 'postsYear'));
        
    }
}
