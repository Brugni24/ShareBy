<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProfileController;
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
    Route::get('/analisiAziendale', [CompaniesController::class, 'index'])->middleware(['verified'])->name('analisiAziendale');
    Route::get('/analisiAziendale/{id}', [CompaniesController::class, 'search'])->middleware(['verified']);

    Route::get('/shareBYOU', function () {
        return view('shareBYOU');
    })->middleware(['verified'])->name('shareBYOU');
    
    Route::get('/consulente', function () {
        return view('consulente');
    })->middleware(['verified'])->name('consulente');
});

require __DIR__.'/auth.php';