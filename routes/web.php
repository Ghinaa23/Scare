<?php

use Illuminate\Support\Facades\Route;
Route::get('/create', 'ScareController@create');
Route::post('/save', 'ScareController@store');
Route::get('/edit/{id}', 'ScareController@edit');
Route::post('/edit/{id}', 'ScareController@update');
Route::get('/delete/{id}','ScareController@delete');
Route::resource('datatable','ScareController');

Route::get('edit', function () {
    return view('update');
});

Route::get('delete()', function () {
    return view('delete');
});

Route::get('datatables', function () {
    return view('table');
});

Route::get('edit', function () {
    return view('edit');
});

Route::get('table', function () {
    return view('table');
});


Route::get('create', function () {
    return view('create');
});

Route::get('proses', function () {
    return view('proses');
});



Route::get('home', function () {
    return view('home');
});

Route::get('cek', function () {
    return view('cek');

});


Route::get('/data', 'ScareController@input');

Route::post('/proses', 'ScareController@proses'); 

Route::get('data', function () {
    return view('data');
Route::post('data', function() {
    return view('proses');



});





});

Route::get('penanganan', function () {
    return view('penanganan');
});

Route::get('video', function () {
    return view('video');

});