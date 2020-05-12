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
        $sapphire = Storage::disk('s3')->url('noimg.png');
        $myhp = Storage::disk('s3')->url('myhomepage1.jpg');
        $calendar = Storage::disk('s3')->url('calendartodo.png');
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('about', compact('glasses','mepic', 'frima', 'sapphire', 'myhp', 'calendar'));
    }

    public function getContact(){
        $books = Storage::disk('s3')->url('09.jpg');
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('contact', compact('glasses','books'));
    }

    public function getConfirm(){
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('confirm', compact('glasses'));
    }

    public function getApp1(){
        $frima = Storage::disk('s3')->url('fm64d.jpg');
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('app1', compact('frima', 'glasses'));
    }
    public function getApp2(){
        $sapphire = Storage::disk('s3')->url('noimg.png');
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('app2', compact('sapphire', 'glasses'));
    }
    public function getApp3(){
        $myhp = Storage::disk('s3')->url('myhomepage1.jpg');
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('app3', compact('myhp', 'glasses'));
    }
    public function getApp4(){
        $calendar = Storage::disk('s3')->url('calendartodo.png');
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('app4', compact('calendar', 'glasses'));
    }
    
    public function postConfirm(request $req){
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('confirm', compact('req', 'glasses'));
    }
    public function getMail(){
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('mail', compact('glasses'));
    }
    public function postMail(request $req){
        $glasses = Storage::disk('s3')->url('glasses.jpg');
        return view('mail', compact('req','glasses'));
    }
}
