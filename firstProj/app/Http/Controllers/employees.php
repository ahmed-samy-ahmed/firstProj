<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class employees extends Controller
{
    public function show(){
        $data = DB::table('employees')->get() ;
        return view('show' , compact('data'));
    }


    public function create(){
        return view('insert');
    }

    public function insert( Request $req){
        DB::table('employees')->insert([
            'Emp_name'=>$req->EmpName ,
            'Age'=>$req->EmpAge 
        ]);
        // return "Employee Added Successfully";
        return redirect('show');
    }

    public function delete($id){
        DB::table('employees')->where('id' , $id)->delete();
        return redirect('show');
    }
}
