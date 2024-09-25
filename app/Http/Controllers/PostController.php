<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function hello(){
        return 'Hello word';
    }
public function show( $title,$id){
        return [
            'title'=>$title,
            'id'=>$id
        ];
    }
    public function data(){
        return 'Je suis misse bamba';
    }
    
    public function new(){
         //    return[
   //     'welcome'=>route('welcome'),
   //     'hello'=>route('hello')
   //    ];
        return redirect()->route('hello');
    }
}
