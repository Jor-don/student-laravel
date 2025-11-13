<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect('/dashboard/home'));

Route::get('/dashboard/home', function () {
    return view('dashboard.home');
})->name('dashboard.home');

Route::get('/dashboard/projects', function () {
    return view('dashboard.project');
})->name('dashboard.projects');

Route::get('/dashboard/notes', function () {
    return view('dashboard.notes');
})->name('dashboard.notes');

Route::get('/dashboard/analytics', function () {
    return "Analytics Page Coming Soon!";
})->name('dashboard.analytics');
