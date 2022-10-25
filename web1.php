<?php

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

Route::get('/',function(){

    return view('article',[

        'article' =>[
                        ['titel'  => 'Lorem libero donec',
                        'discription' => 'Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                            Donec id elit non mi porta gravida at eget metus.',
                        'name' => 'John Smith',
                        'job' => 'doctor'
                        ],
                        ['titel'  => 'Lorem libero donec',
                        'discription' => 'Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                            Donec id elit non mi porta gravida at eget metus.',
                        'name' => 'John Smith1',
                        'job' => 'engineer'
                        ],
                        ['titel'  => 'Lorem libero donec',
                        'discription' => 'Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                            Donec id elit non mi porta gravida at eget metus.',
                        'name' => 'John Smith6',
                        'job' => 'doctor4'
                        ]
                    ]   

    ]);

});
