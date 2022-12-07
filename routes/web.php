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
    return view('super.overview');
});

Route::get('/design/test', function(){return view('layouts.droople');})->name('test');
Route::get('/distributors', function(){return view('distributors.home');})->name('distributors');
Route::get('/distributor/contact/{id}', function(){return view('distributors.contact');})->name('contactDistributor');
Route::get('/distributor/{id}', function(){return view('distributors.distributor');})->name('distributor');
Route::get('/overview/super', function(){return view('super.overview');})->name('overview');
Route::get('/assets/super', function(){return view('super.assets');})->name('assets');
Route::get('/asset/dashboard/{id}', [App\Http\Controllers\DashboardController::class,'index'])->name('asset_dashboard');
Route::get('/clients', function(){return view('clients.home');})->name('clients');
Route::get('/members', function(){return view('members.home');})->name('members');


Route::get('/devices', function(){return view('devices.home');})->name('devices');
Route::get('/devices/new', function(){return view('devices.new');})->name('devices-new');
