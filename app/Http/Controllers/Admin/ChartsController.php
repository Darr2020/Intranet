<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Charts\CountPost;


class ChartsController extends Controller{
    
    public function line(){

        $titulo = "Linea";

        

        $countPost = DB::table('posts')
            ->select(DB::raw('count(*) as post_count, state'))
            ->where('state', 'PUBLISHED')
            ->groupBy('state')
            ->get();
        dd($countPost);

        $width = 2;
        $chart = new countPost;
        $chart->width(100);
        $chart->height(110);
        $chart->loaderColor('blue');
        $chart->labels(['Enero', 'Febrero', 'Marzo']);
        $chart->dataset('My dataset 1', 'line', [$countPost])->options([
            'color' => 'blue',
            'backgroundColor' => 'yellow'
        ]);

        return view('admin.charts.line', compact('titulo', 'chart'));
        
    }
}
