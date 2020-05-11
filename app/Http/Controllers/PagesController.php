<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PagesController extends Controller
{
    //
    public function getHome(){
        $path = Storage::disk('s3')->url('snowboard.jpg');
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('home', compact('path', 'glasses'));
       
    }

    public function getAbout(){
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('about', compact('glasses'));
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
