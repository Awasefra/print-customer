<?php

use App\Http\Controllers\CustomerVirtualAccountController;
use App\Models\CustomerVirtualAccount;
use Illuminate\Support\Facades\Route;

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

Route::get('/print', function () {
    return view('welcome');
});
Route::prefix('customer-va')->controller(CustomerVirtualAccountController::class)->group(function(){
    Route::get('', 'index')->name('customer-va.home');
    Route::post('/print-lot', 'printLot')->name('customer-va.print-lot');
    Route::post('/print-select', 'printSelect')->name('customer-va.print-select');
});
