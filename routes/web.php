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


Route::get('/', 'JobController@jobFetch');



Route::get('des/{id}','JobController@desShow');


Route::view('apply','apply_job');

Route::get('apply/{id}','JobController@applyJob');


Route::post('final', 'JobController@jobApply');

Route::view('success', 'successview');

Route::view('create', 'createjobview');
Route::post('submit', 'JobController@addJob');

Route::get('applicant', 'JobController@applicants');
