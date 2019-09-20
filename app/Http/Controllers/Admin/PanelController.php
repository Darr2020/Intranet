<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon;

class PanelController extends Controller{
  
    public function view(){

        $countRol = DB::table('roles')->count();
        $countTag = DB::table('tags')->count();

        $countPost = DB::table('posts')
            ->where('user_id', auth()->id())
            ->count();

        $countEvent = DB::table('events')
            ->where('user_id', auth()->id())
            ->count();  
        
        $startMonth = date("Y-m-01"); 
        $endtMonth  = date("Y-m-t");
        $startYear  = date("Y-01-d"); 
        $endYear    = date("Y-12-t");

        $year   = date("Y");
        $month  = date("m");//->diffForHumans();

        //Consulta las noticias publicadas en el mes y año actual
        $postMonth = DB::table('posts')              
            ->whereBetween('created_at', [$startMonth, $endtMonth])
            ->where('state', 'PUBLISHED')
            ->count(); 

        $postYear = DB::table('posts')
            ->whereBetween('created_at', [$startYear, $endYear])
            ->where('state', 'PUBLISHED')
            ->count();   
            
        
        //Consulta los eventos publicados en el mes y año actual   
        $eventMonth = DB::table('events')              
            ->whereBetween('created_at', [$startMonth, $endtMonth])
            ->where('state', 'PUBLISHED')
            ->count();   

        $eventYear = DB::table('events')              
            ->whereBetween('created_at', [$startYear, $endYear])
            ->where('state', 'PUBLISHED')
            ->count(); 

        return view('admin.panel', compact(
            'year', 'month', 'countRol', 'countPost', 'countEvent', 'countTag', 'postMonth', 'postYear', 'eventMonth', 'eventYear'
        ));

    }
}
