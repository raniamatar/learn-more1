<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form1Controller extends Controller
{
    function index()
    {
        return view('form1.index');
    }
    function form1Submit(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required|string|min:3|max:20',
            'email'=>'required|email',
            'age'=>'required|integer|digits_between:15,80',
            'city'=>'required'
        ]);
    }
    function form2(){
        return view('form2.index');

    }
    function form2Submit(Request $request){
        // dd($request->all());
        // $name=time() . rand() . $request->file('image')->getClientOriginalName();
        // $ex='form1_'.time() .'_'. rand() . '.'. $request->file('image')->getClientOriginalExtension();

        // $request->file('image')->move(public_path('uploads'),$ex);
        foreach($request->file('album') as $i){
            $ex='form1_'.time() .'_'. rand() . '.'. $i->getClientOriginalExtension();

            $i->move(public_path('uploads'),$ex);

        }

    }
}
