<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ReportsController extends Controller{

    public function viewReport(){ 
        $date = Carbon::now();
        $date = $date->format('d/m/Y'); 
        $view =  \View::make('admin.audit.report', compact('date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Reporte PDF');
    }

    public function downReport(){ 
        $date = Carbon::now();
        $date = $date->format('d/m/Y'); 
        $view =  \View::make('admin.audit.report', compact('date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('Reporte.pdf');
    }
}
