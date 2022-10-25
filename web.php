<?php

use App\Models\Article;
use Illuminate\Http\Request;
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

Route::get('/hi', function(){
    return "hello"; 
});

Route::get('/bye', function(){
    return response('<h1>bye</h1>'); 
});

Route::get('/photos/{id}',function($id){

    return response('photo id '. $id);
});

Route::get('/photosdd/{id}',function($id){
    //die dump
    ddd($id);
    return response('photo id '. $id);
});

//find?uni=ruhuna
Route::get('/find',function(Request $request){
    return response('university of '.$request->uni);
});

//All article
Route::get('/article',function(){

    return view('articles',Article::all());

});
//selected article
Route::get('/article/{job}',function($job){

    return view('article',Article::find($job));

});
