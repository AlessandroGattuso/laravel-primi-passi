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



Route::get('home', function () {
    $pages = [
        'home',
        'second',
        'third'
    ];
    $page_chosen = 'home';
    return view('home', compact('pages', 'page_chosen'));
})->name('home');


Route::get('second', function () {

    $pages = [
        'home',
        'second',
        'third'
    ];
    
    $page_chosen = 'second';

    return view('second', compact('pages', 'page_chosen'));
})->name('second');

Route::get('third', function () {

    $pages = [
        'home',
        'second',
        'third'
    ];
    
    $page_chosen = 'third';

    return view('third', compact('pages', 'page_chosen'));
})->name('third');
