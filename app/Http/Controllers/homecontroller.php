<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function home(){
        return view('user.index');
    }
      public function login(){
        return view('auth.login');
      }
      public function register(){
        return view('auth.register');
      }
      public function pages(){
        return view('user.pages');
      }  
      public function blog(){
        return view('user.blog');
      }
      public function team(){
        return view('user.team.main-team');
      }
      public function patricia(){
        return view('user.team.patricia');
      }
      public function contact(){
        return view('user.contact');
      }
      public function error(){
        return view('user.error');
      }
      public function gallery(){
        return view('user.gallery');
      }
      public function price(){
        return view('user.price');
      }
      
}
