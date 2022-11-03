<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FragranceController;
use App\Http\Controllers\Admin\BrandMasterController;
use App\Http\Controllers\Admin\ComponentMasterController;

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

Route::get('/admin', function () {
    return view('admin.top');
});

Route::resource('/admin/fragrances', FragranceController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'   
]);

Route::resource('/admin/brands', BrandMasterController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'   
]);

Route::resource('/admin/components', ComponentMasterController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'   
]);