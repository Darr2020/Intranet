<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ReportsController extends Controller{

    public function viewReport(){ 
        $date = Carbon::now();
        $date = $date->format('d/m/Y'); 
        $view =  \View::make('admin.reports.report', compact('date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('report');
    }

    public function downReport(){ 
        $date = Carbon::now();
        $date = $date->format('d/m/Y'); 
        $view =  \View::make('admin.reports.report', compact('date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('report.pdf');
    }
}
