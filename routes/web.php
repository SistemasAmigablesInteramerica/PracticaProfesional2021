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

Route::get('/', function () {
    return view('index');
});

Route::get('/meetings', function () {
    return view('meetings');
});

Route::get('/meetings-details', function () {
    return view('meeting-details');
});

Route::get('/insert-studentsinfo', function () {
    return view('insert-studentsinfo');
});

Route::get('/insert-teacherinfo', function () {
    return view('insert-teacherinfo');
});

Route::get('/insert-gradeinfo', function () {
    return view('insert-gradeinfo');
});

Route::get('/insert-subjectinfo', function () {
    return view('insert-subjectinfo');
});

Route::get('/insert-studentrelativesinfo', function () {
    return view('insert-studentrelativesinfo');
});