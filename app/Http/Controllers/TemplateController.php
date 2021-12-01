<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    
    public function index(){

        return view('Layout.index');
    }

    public function contact(){

        return view('contact');
    }

    public function become_a_vendor(){

        return view('become-a-vendor');
    }

    public function my_account(){
        
        return view('my-account');
    }

    public function login(){

        return view('login');
    }

    public function cart(){

        return view('cart');
    }

    public function wishlist(){

        return view('wishlist');
    }

    public function compare(){

        return view('compare');
    }

    public function checkout(){

        return view('checkout');
    }
}