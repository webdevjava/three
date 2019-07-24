<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usertemplate extends Controller
{
     public function index(){

         return view('index');
     }

     public function register(){

         return view('register');
     }

     public function login(){

         return view('login');
     }

     public function cards(){

         return view('cards');
     }

     public function charts(){

         return view('charts');
     }

     public function animation(){

         return view('animation');
     }


    public function buttons(){

        return view('buttons');
    }

    public function blank(){

        return view('blank');
    }

    public function error(){

        return view('404');
     }

    public function fpassword(){

        return view('forgot-password');
     }

    public function other(){

        return view('other');
     }

    public function color(){

        return view('color');
     }

    public function border(){

        return view('border');
     }

    public function tables(){

        return view('tables');
     }


}
