<?php

use App\Http\Controllers\Backend\AdminEventsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontEndController::class, 'welcome'])->name('home');
Route::get('/about', [FrontEndController::class, 'about'])->name('about');
Route::get('/services', [FrontEndController:: class, 'services'])->name('services');
Route::get('/contact', [FrontEndController:: class, 'contact'])->name('contact');


Route::get('/dashboard', function () {
    return view('Backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/events')->group(function () {

    Route::get('/', [EventsController::class, 'index'])->name('events.index');
    Route::get('/{slug}', [EventsController::class, 'show'])->name('events.show');
    Route::post('/{slug}/book', [EventsController::class, 'store'])->name('events.store');

});



Route::middleware('auth')->group(function () {

    Route::prefix('/admin/events')->group(function () {
        Route::get('/', [AdminEventsController::class, 'index'])->name('admin.events.index');
        Route::get('/create',  [AdminEventsController::class, 'create'])->name('admin.events.create');
        Route::get('/show/{slug}', [AdminEventsController::class, 'show'])->name('admin.events.show');

        Route::post('/store', [AdminEventsController::class, 'store'])->name('admin.events.store');
        Route::put('/update/{slug}', [AdminEventsController::class, 'update'])->name('admin.events.update');

    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
