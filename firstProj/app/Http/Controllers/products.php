<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class products extends Controller
{
    //
    public function msg(){
        return "Welcome Products";
    }
    public function show(){
        return view('display');
    }
    public function upl(){
        return view('uploading');
    }
    public function upload(Request $req){
        $img = $req->file('photo')->getClientOriginalName();
        // return $img;
        $place = $req->file('photo')->storeAs('images' ,$img , 'imgs' );
        // return $place;
    }
}
