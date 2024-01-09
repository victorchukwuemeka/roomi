<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;


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
    return view('dashboard');
});

Route::get('/hhh', [MessageController::class, 'hhh']);


Route::get('/profileo', function(){
  return view('profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

//->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/chat/{id}', [MessageController::class, 'index'])->name('chat');
Route::post('/chat', [MessageController::class, 'store'])->name('messages.store');


Route::middleware('auth')->group(function () {
  Route::get('profile/{id}', [ProfileController::class, 'index'])->name('profile.index');
  Route::get('/profile_edit', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile_update/{user}', [ProfileController::class, 'added'])->name('profile.update');
  Route::delete('/profile_destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');

});







require __DIR__.'/auth.php';
