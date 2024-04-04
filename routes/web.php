<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Villa.index');
});

Route::get('/property-details', function () {
    return view('Villa.property-details');
});

Route::get('/properties', function () {
    return view('Villa.properties');
});

Route::get('/contact', function () {
    return view('Villa.contact');
});
Route::get('/schedule-visit', function () {
    return view('Villa.schedule-visit');
});
Route::get('/admin', function () {
    return view('Villa.Admin.index');
});


 Route::get('/admin/file/create', function () {
    return view('Villa.Admin.File.create');
 });



Route::get('/dashboard', function () {
    return view('Villa.Admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('Villa.Admin.index');
    });

    Route::resource('files', 'App\Http\Controllers\FileController');
    Route::resource('carousels', 'App\Http\Controllers\CarouselController');
    Route::resource('abouts', 'App\Http\Controllers\AboutController');
    Route::resource('facts', 'App\Http\Controllers\FactsController');
    Route::resource('properties', 'App\Http\Controllers\PropertyController');
    Route::resource('best_deals', 'App\Http\Controllers\BestDealController');
});





require __DIR__.'/auth.php';


