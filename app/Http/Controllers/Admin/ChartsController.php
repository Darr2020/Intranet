<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ChartsController extends Controller{
    
    public function area(){

        $titulo = "Area";     
   
        $postsYear = DB::table('posts')
            ->select(DB::raw('count(*) as total'), DB::raw('extract(year from created_at) as year'))
            ->groupBy('year')->orderBy('year','ASC')->get();
        
        return view('admin.charts.area', compact('titulo', 'postsYear'));
    }

    public function bar(){

        $titulo = "Barra";     
   
        $eventsYear = DB::table('events')
            ->select(DB::raw('count(*) as total'), DB::raw('extract(year from created_at) as year'))
            ->groupBy('year')->orderBy('year','ASC')->get();

        return view('admin.charts.bar', compact('titulo', 'eventsYear'));        
    }

    public function pie(){

        $titulo = "Torta";     
   
        $eventsP = DB::table('events')->where('state', 'PUBLISHED')->count(); //Eventos publicados
        $eventsD = DB::table('events')->where('state', 'DRAFT')->count(); // Eventos guardados como borrador

        $postsP = DB::table('posts')->where('state', 'PUBLISHED')->count(); //Noticias publicados
        $postsD = DB::table('posts')->where('state', 'DRAFT')->count(); //Noticias guardados como borrador
        
        $servicesA = DB::table('services')->where('state', 'ACTIVE')->count();//Servicios activos
        $servicesD = DB::table('services')->where('state', 'DEACTIVATED')->count();//Servicios guardados como borrador

        return view('admin.charts.pie', compact(
            'titulo', 'eventsP', 'eventsD', 'postsP', 'postsD', 'servicesA', 'servicesD', 'eventsT'
        ));        
    }
}
