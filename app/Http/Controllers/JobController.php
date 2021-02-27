<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services\business\SecurityService;


class JobController extends Controller
{
    //
    public function index()
    {
        
    }
    
    public function viewJob(Request $request){
        //request all songs from bs and dao
        $jobs = new SecurityService();
        $id = $request->input('userid');
        
        $results = $jobs->viewJob($id);
        
        if($results != null)
        {
            return view('job')->with('jobs',$results);
        }
        else
        {
            return view('job')->with('msg',"User has no Job");
        }
    }
}
