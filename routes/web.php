<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/events/{id?}', function ($id = null) {
    return view('events', ['eventId' => $id]);
});

Route::get('/event/ngabuburIT', function () {
    return view('events-detail'); // Pastikan nama filenya events-detail.blade.php
});

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');