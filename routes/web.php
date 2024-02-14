<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SupportController;


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

//this route handles all the blog related activity of the user
Route::get('blogs',[BlogController::class, 'index'])->name('blogs');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog');

//this route handles the About
Route::get('about',[PageController::class, 'about'])->name('about');

//route contact route
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::post('/message/support', [SupportController::class, 'store'])->name('message.support');


require __DIR__.'/auth.php';
