<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('listings', [
            'heading'=>'Latest Listings',
            'listings'=>[  
                [
                    'id'=>1, 
                    'title'=>'Listing One',
                    'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
                ],
                [
                    'id'=>2, 
                    'title'=>'Listing Two',
                    'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
                ]
            ]       
        ]);
});

Route::get('/hello', function() {
    return response('<h1>Hello World</h1>')
        ->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id) {
    return response('Post' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    return $request->name . ' ' . $request->city;
});