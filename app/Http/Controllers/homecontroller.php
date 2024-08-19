<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home.index');
    }
    public function about() {
        return view('pages.about.index');
    }

    public function team(){
        return view('pages.about.team');
    }

    public function service(){
        return view('pages.service.index');
    }
}
