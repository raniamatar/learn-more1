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
}
