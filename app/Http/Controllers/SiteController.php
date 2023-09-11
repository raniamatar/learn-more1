<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function index(){
        $data=[1,2,3,4];
        $age = 19;
        // foreach($data as $i){
        //     echo $i . '<br>';
        // }
        // return view('index')->with('data',$data)->with('age',$age);
        return view('Site1.index',compact('data','age'));
        // return view('Site1.index',[
        //     'data'=>$data,
        //     'age'=>$age
        // ]);


    }

    function about() {

        return view('Site1.about');
    }
    function services(){
        return view('Site1.services');
    }
    function contact(){
        return view('Site1.contact');
    }
}
