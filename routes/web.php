<?php
use App\Http\Controllers\SiteController;
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
    return view('index');
});
Route::get('home',function(){
    return view('Site1.home');
});

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
//site1
