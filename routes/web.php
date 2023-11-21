<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Paginas/Home',);
});

Route::get('/aboutUs', function () {
    return Inertia::render('Paginas/AboutUs');
});

Route::get('/adopt', function () {
    return Inertia::render('Paginas/Adopt');
});

Route::get('/donate', function () {
    return Inertia::render('Paginas/Donate');
});

Route::get('/adoptionForm', function () {
    return Inertia::render('Paginas/AdoptionForm');
});

Route::get('/commonQuestions', function () {
    return Inertia::render('Paginas/CommonQuestions');
});

Route::get('/contact', function () {
    return Inertia::render('Paginas/Contact');
});

Route::get('/teste', function () {
    return Inertia::render('Paginas/teste');
});

Route::get('/member', function () {
    return Inertia::render('Paginas/Member');
});
Route::get('/erro', function () {
    return Inertia::render('Paginas/erro');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
