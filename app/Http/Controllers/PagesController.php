<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getHome(){
        return view ('home');
    }

    public function getAbout(){
        return view ('about');
    }

    public function getContact(){
        return view ('contact');
    }

    public function getConfirm(){
        return view ('confirm');
    }
    public function postConfirm(){
        return view ('confirm');
    }

}
