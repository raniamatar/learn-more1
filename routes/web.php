<?php
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Form1Controller;


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
// Route::get('ahmed',function(){
//         return 'ahmed';
// });
// Route::get('users',function(){
//         return 'users';
// });
// Route::get('users/profile/{id?}',function($id=null){
//         if($id == null){
//                 return 'response null';
//         }else{
//                 return 'users ' . $id;
//         }
// });

// Route::get('news/{id?}',function($id=null){
//         if($id != null){
//                 return 'new ' . $id;
//         }
//                 return 'all news ...';

// });

// Route::put('put',function(){});
// //Route::patch('patch',function(){});
// Route::delete('delete',function(){});
Route::get('/',function(){
    return view('Site1.index');
});
Route::get('home',function(){
    return view('Site1.home');
});
//site1

Route::prefix('site1')->controller(SiteController::class)->name('site.')->group(function(){
    Route::get('/index','index'
    )->name('index');
    Route::get('/about','about'
    )->name('about');
    Route::get('/services','services'
    )->name('services');
    Route::get('/contact','contact'
    )->name('contact');


});
//site2
Route::prefix('site2')->group(function(){
    Route::get('/',[Site2Controller::class,'index'])->name('index');
    Route::get('about',[Site2Controller::class,'about'])->name('about');
    Route::post('post_msg',[Site2Controller::class,'post_msg'])->name('post_msg');
    Route::get('/view',[Site2Controller::class,'view'])->name('view');


});

//form1
Route::get('form1',[Form1Controller::class,'index'])->name('index');
Route::post('form1Submit',[Form1Controller::class,'form1Submit'])->name('form1Submit');

//form2
Route::get('form2',[Form1Controller::class,'form2'])->name('form2');
Route::post('form2Submit',[Form1Controller::class,'form2Submit'])->name('form2Submit');


