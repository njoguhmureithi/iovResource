<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home_test', [HomeController::class,'home_test'])->name('home_test');

Route::get('/sermons', [HomeController::class, 'sermons'])->name('sermons');

Route::get('/events', [HomeController::class, 'events'])->name('events');

Route::get('/publications', [HomeController::class, 'publications'])->name('publications');
Route::get('/sermonContent', [HomeController::class, 'sermonContent'])->name('sermonContent');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');



Route::get('/admin-dashboard', function(){
    return view('admin.admin-dashboard');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
