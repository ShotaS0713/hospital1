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
        $mepic = Storage::disk('s3')->url('08.jpg');
        $frima = Storage::disk('s3')->url('fm64d.jpg');
        $sapphire = Storage::disk('s3')->url('02.jpg');
        $myhp = Storage::disk('s3')->url('myhomepage1.jpg');
        $calendar = Storage::disk('s3')->url('calendartodo.png');
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('about', compact('glasses','mepic', 'frima', 'sapphire', 'myhp', 'calendar'));
    }

    public function getContact(){
        return view ('contact');
    }

    public function getConfirm(){
        return view ('confirm');
    }

    public function getApp1(){
        $frima = Storage::disk('s3')->url('fm64d.jpg');
        return view('app1', compact('frima'));
    }
    public function getApp2(){
        $sapphire = Storage::disk('s3')->url('02.jpg');
        return view('app2', compact('sapphire'));
    }
    public function getApp3(){
        $myhp = Storage::disk('s3')->url('myhomepage1.jpg');
        return view('app3', compact('myhp'));
    }
    public function getApp4(){
        $calendar = Storage::disk('s3')->url('calendartodo.png');
        return view('app4', compact('calendar'));
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
