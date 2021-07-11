<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    //
    public function index()
    {
        //
      
        // $cons =  Content::all() ;
        return view('dashboard.index');//->with('cons',$cons) ;
    }
}
