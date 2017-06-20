<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $data = Project::select('title','image_url','start_at','end_at')->get();
        return view('dashboard')->with('data',$data);
    }

}
