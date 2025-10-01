<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return "
    <h1> Beranda</h1>
    <a href='/about'>About</a><br>
    ";
});
Route::get('/about', function () {
    //return view('welcome');
    return "
    <h1>Homepage About</h1>
    <a href='/'>Home</a><br>
    <a href='/profile'> Profile</a>
    ";
});
Route::get('/profile', function () {
    //return view('welcome');
    return "Halaman Profile";
});
