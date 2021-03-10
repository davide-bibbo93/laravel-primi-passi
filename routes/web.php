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
    return view('welcome');
});

Route::get('/help', function () {
    return view('lorem');
});

Route::get('/birth', function () {
  $data = [
    'name' => 'Davide',
    'lastname' => 'Bibbò',
    'guest_list' => [
      'Ottavio',
      'Alfredo',
      'Davide'
    ],
    'animals' => [
      // empty
    ],
  ];
  return view('birth', $data);
});
