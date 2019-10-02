<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PanelController extends Controller{

    public function view(){  
        return view('admin.panel');
    }
}
