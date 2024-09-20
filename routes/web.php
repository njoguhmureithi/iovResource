<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\SermonCategoryController;
use App\Http\Controllers\SermonNotesController;
use App\Http\Controllers\SermonsController;
use App\Http\Controllers\UsersController;
use Database\Factories\UserFactory;
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

Route::get('/sermons', [HomeController::class, 'sermons'])->name('sermons');

Route::get('/events', [HomeController::class, 'events'])->name('events');

Route::get('/publications', [HomeController::class, 'publications'])->name('publications');
Route::get('/sermonContent', [HomeController::class, 'sermonContent'])->name('sermonContent');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    /**
     * Grouped admin routes
     * Added the prefix so that the admin routes do not conflict with the routes above.
     * E.g /sermons is declared above, the one below will be /admin/sermons
     */
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('dashboard', function(){
            return view('admin.admin-dashboard');
        })->name('admin-dashboard');
        Route::resource('events', EventsController::class);
        Route::resource('publications', PublicationsController::class);
        Route::resource('sermons-category', controller:SermonCategoryController::class);
        Route::resource(name:'sermon-notes', controller:SermonNotesController::class);
        Route::resource(name: 'sermons', controller:SermonsController::class);
        Route::resource(name:'users', controller:UsersController::class);
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
