<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', fn() => redirect('/dashboard/home'));
Route::get('/dashboard/home', fn() => view('dashboard.home'))->name('dashboard.home');
Route::get('/dashboard/projects', fn() => view('dashboard.project'))->name('dashboard.projects');
Route::get('/dashboard/notes', fn() => view('dashboard.notes'))->name('dashboard.notes');
