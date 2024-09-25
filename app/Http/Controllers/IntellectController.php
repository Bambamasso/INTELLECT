<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntellectController extends Controller
{
    //
    public function index(){
        return view('Accueil');
    }
    public function apropos(){
        return view('apropos');
    }
    public function register(){
     return view('register');
    }
    public function register_traitement(){

    }
    public function login(){
        return view('login');
    }
    public function login_traitement(){

    }
}
