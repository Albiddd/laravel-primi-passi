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
    $data = [
        'students'=> [
            'Alberto Dore',
            'Filippo Urriani',
            'Nigel Di Nella',
            'Francesco Pieraccini',
        ],
    ];
    return view('home', $data);
});
