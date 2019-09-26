<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use Carbon;
use View;

class PanelController extends Controller{



    public function view(){  
		 
	
   
      
       

        return view('admin.panel');

    }
}
