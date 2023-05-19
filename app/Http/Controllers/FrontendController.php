<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

public function index(){

    return view('index');

}


    public function about_index()
    {

        return view('about');
        
    }

    public function contact_index()
    {
        return view('contact');
    }
}
