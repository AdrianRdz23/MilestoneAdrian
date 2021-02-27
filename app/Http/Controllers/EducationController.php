<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SecurityService;

class EducationController extends Controller
{
    //
    public function index()
    {
        
    }
    
    public function viewEducation(Request $request){
        //request all songs from bs and dao
        $educations = new SecurityService();
        $id = $request->input('userid');
        
        $results = $educations->viewEducation($id);
        
        if($results != null)
        {
            return view('education')->with('educations',$results);
        }
        else
        {
            return view('education')->with('msg',"User has no Education");
        }
    }
}
