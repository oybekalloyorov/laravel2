<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){

        // session('success', 'value');
        // dd(session()->all());
        return view('main');
    }
    public function about(){
        return view('about');
    }
    public function services(){
        return view('services');
    }

    public function projects(){
        return view('projects');
    }
    public function contact(){
        return view('contact');
    }
}
