<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/servizi', function () {
    return view('servizi');
});

Route::get('/chiSiamo', function () {
    return view('chiSiamo');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Routes Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/analisiAziendale', [CompaniesController::class, 'index'])->middleware(['verified'])->name('analisiAziendale');
    Route::get('/analisiAziendale/{id}', [CompaniesController::class, 'search'])->middleware(['verified']);
    Route::get('/analisiAziendale/{id}/company/logo/{companyName}', [CompaniesController::class, 'getCompanyLogo'])->middleware(['verified'])->name('company.logo');
    Route::get('/analisiAziendale/{id}/stockdata', [CompaniesController::class, 'getStockData'])->middleware(['verified'])->name('stock.data');

    Route::get('/shareBYOU', function () {
        return view('shareBYOU');
    })->middleware(['verified'])->name('shareBYOU');
    
    Route::get('/consulente', function () {
        $chatLog = session('chatLog', []);
    
        return view('consulente', compact('chatLog'));
    })->middleware(['verified'])->name('consulente');

    Route::post('/consulente/reply', [ChatController::class, 'reply'])->name('consulente.reply');
});

require __DIR__.'/auth.php';