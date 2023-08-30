<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('ahmed',function(){
        return 'ahmed';
});
Route::get('users',function(){
        return 'users';
});
Route::get('users/profile/{id?}',function($id=null){
        if($id == null){
                return 'response null';
        }else{
                return 'users ' . $id;
        }
});

Route::get('news/{id?}',function($id=null){
        if($id != null){
                return 'new ' . $id;
        }
                return 'all news ...';

});

Route::put('put',function(){});
//Route::patch('patch',function(){});
Route::delete('delete',function(){});


