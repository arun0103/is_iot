<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index($id){
        return view('assets.dashboard')->with('device_id',$id);
    }
}
