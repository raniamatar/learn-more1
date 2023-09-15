<?php

namespace App\Http\Controllers\Site3\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $categories=Category::all();//array
        // dd($categories);
        return view('Site3.category.index',compact('categories'));
    }
    function create(){
        return view('Site3.category.create');
    }
    function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);
        Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return redirect()->route('category.index')->with(['msg'=>'category added success:)',])
        ->with(['type'=>'success']);

    }
    function edit($id){
        $category=Category::query()->findOrFail($id);
        // dd($category);
        return view('Site3.category.edit',compact('category'));

    }
    function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);
        $category=Category::query()->findOrFail($id);
        $category->update([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return redirect()->route('category.index')->with(['msg'=>'category updated success:)',])
        ->with(['type'=>'success']);


    }
    function destroy($id){
        Category::destroy($id);
        return redirect()->route('category.index')->with(['msg'=>'category deleted success:)',])
        ->with(['type'=>'danger']);
    }
}
