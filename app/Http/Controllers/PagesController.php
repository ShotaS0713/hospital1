<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PagesController extends Controller
{
    //
    public function getHome(){
        $path = Storage::disk('s3')->url('snowboard.jpg');
        return view('home', compact('path'));
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

    public function getApp1(){
        return view ('app1');
    }
    public function getApp2(){
        return view ('app2');
    }
    public function getApp3(){
        return view ('app3');
    }
    public function getApp4(){
        return view ('app4');
    }
    
    public function postConfirm(request $req){
        return view ('confirm',compact('req'));
    }
    public function getMail(){
        return view ('mail');
    }
    public function postMail(request $req){
        return view ('mail',compact('req'));
    }
}
