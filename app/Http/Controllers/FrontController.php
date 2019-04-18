<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function index()
   {
       $shirts=product::all();

       return view('front-end.home',compact('shirts'));
   }

    public function shirts()
    {
        $shirts=product::all();
        return view('front-end.shirts',compact('shirts'));
    }

    public function shirt()
    {
        return view('front-end.shirt');
    }
}
