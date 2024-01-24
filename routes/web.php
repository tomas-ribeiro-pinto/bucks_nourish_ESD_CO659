<?php

use App\Http\Controllers\FoodbankController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Models\Organization;
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

Route::get('/', [SearchController::class, 'index']);
Route::post('/', [SearchController::class, 'search']);
Route::post('/filter', [SearchController::class, 'filter']);
Route::get('/filter', [SearchController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/dashboard/update', [OrganizationController::class, 'update'])
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('info', function () {
    return view('info');
});

Route::get('about-us', function () {
    return view('about');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('/foodbanks', [FoodbankController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('foodbanks');
Route::post('/foodbanks/update', [FoodbankController::class, 'update'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
