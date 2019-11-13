<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use View;

class dataPanelServiceProvider extends ServiceProvider{
    
    public function register(){
        //
    }


    public function boot(){
        /*Total de  Roles, Etiquetas, Noticias, Eventos y Eventos que hay en la base de Datos*/
       View::composer(['*'], function($view){
            $TRol = DB::table('roles')->count();
            $view->with('TRol', $TRol);
        });
        View::composer(['*'], function($view){
            $date = date('Y-m-d');        
            $dayNoti = DB::table('notifications')->where('created_at', $date)->get();
            dd($dayNoti);
            $notifications = DB::table('notifications')->get();
            $view->with(compact('notifications', 'dayNoti'));
        });
        View::composer(['*'], function($view){
            $TPost = DB::table('posts')->count();
            $view->with('TPost', $TPost);
        });
        View::composer(['*'], function($view){
            $TEvent = DB::table('events')->count();
            $view->with('TEvent', $TEvent);
        });

        View::composer(['*'], function($view){
            $Tservice = DB::table('services')->count();
            $view->with('Tservice', $Tservice);
        });

        View::composer(['*'], function($view){
            $TTag = DB::table('tags')->count();
            $view->with('TTag', $TTag);
        });


        View::composer(['*'], function($view){
            $y = date('Y');
            $view->with('y', $y);
        });       

        View::composer(['*'], function($view){
            $startY  = date("Y-01-d"); 
            $endY    = date("Y-12-t");

            $eventY = DB::table('events')              
                ->whereBetween('created_at', [$startY, $endY])
                ->where('state', 'PUBLISHED')
                ->count(); 
            $view->with('eventY', $eventY);
        });

        View::composer(['*'], function($view){
            $startY  = date("Y-01-d"); 
            $endY    = date("Y-12-t");

            $tasksY = DB::table('tasks')              
                ->whereBetween('created_at', [$startY, $endY])
                ->count(); 
            $view->with('tasksY', $tasksY);
        });


        View::composer(['*'], function($view){
            $startY  = date("Y-01-d"); 
            $endY    = date("Y-12-t");

            $postY = DB::table('posts')
                ->whereBetween('created_at', [$startY, $endY])
                ->where('state', 'PUBLISHED')
                ->count();  
            $view->with('postY', $postY);
        });

        View::composer(['*'], function($view){

            $startM = date("Y-m-01"); 
            $endtM  = date("Y-m-t");

            $postM = DB::table('posts')              
                ->whereBetween('created_at', [$startM, $endtM])
                ->where('state', 'PUBLISHED')
                ->count();   
            $view->with('postM', $postM);
        });  

        View::composer(['*'], function($view){

            $startM = date("Y-m-01"); 
            $endtM  = date("Y-m-t");
            
            $eventM = DB::table('events')              
                ->whereBetween('created_at', [$startM, $endtM])
                ->where('state', 'PUBLISHED')
                ->count();  
            $view->with('eventM', $eventM);
        });  

        View::composer(['*'], function($view){

            $startM = date("Y-m-01"); 
            $endtM  = date("Y-m-t");

            $tasksM = DB::table('tasks')              
                ->whereBetween('created_at', [$startM, $endtM])
                ->count();   
            $view->with('tasksM', $tasksM);
        });  

        View::composer(['*'], function($view){
            //Array Meses en español
            $monthSpanish = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

            $m = $monthSpanish[date("n")-1]; //Mes actualen español
            $view->with('m', $m);
        });       
    }
}
