<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;

// use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Hash;


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
            'age'=>'required',
            'password'=>'required',
            // 'city'=>'required'
        ]);
        // DB::statement('INSERT INTO(A,B,C)VALUES(?,?)');
        // DB::insert('courses',[
            //بنحط القيم
        // ]);
        Category::create([
            'name'=>$request->name,
            // 'age'=>22,
            // 'email'=>$request->email,
            // 'password'=>Hash::make($request->password),
        ]);
        User::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->back();

    }

    function form2(){
        return view('form2.index');

    }
    function form2Submit(Request $request){
        // dd($request->all());
        // $name=time() . rand() . $request->file('image')->getClientOriginalName();
        // $ex='form1_'.time() .'_'. rand() . '.'. $request->file('image')->getClientOriginalExtension();

        // $request->file('image')->move(public_path('uploads'),$ex);
        // foreach($request->file('album') as $i){
        //     $ex='form1_'.time() .'_'. rand() . '.'. $i->getClientOriginalExtension();

        //     $i->move(public_path('uploads'),$ex);

        }

    }
    // function form3Submit(Request $request){
    //     Category::create([
    //         'name'=>'food',
    //     ]);
    // }

