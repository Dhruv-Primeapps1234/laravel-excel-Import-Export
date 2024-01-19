<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(ExcelController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/users-export', 'export')->name('product.export');
    Route::post('/users-import', 'import')->name('product.import');
});