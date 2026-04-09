<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');