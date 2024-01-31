<?php
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminAuth\RegisterController;
use App\Http\Controllers\Admin\AdminAuth\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminUserManagement;
use App\Http\Controllers\Admin\AdminListingModerationController;
use App\Http\Controllers\Admin\AdminCommunicationHubController;
use App\Http\Controllers\Admin\AdminSupportTicketController;
use App\Http\Controllers\Admin\AdminBlogController;


//backdoor for the admin
Route::get('/alchemy97', [RegisterController::class, 'showRegistrationForm']);
Route::post('/admin/register', [RegisterController::class, 'register']);

Route::middleware(['admin'])->group(function () {
    // Your admin routes go here

    //this routes can only be accessed my admin users
    //Route::get('/admin/register', [RegisterController::class, 'showRegistrationForm']);
    //Route::post('/admin/register', [RegisterController::class, 'register']);


    Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm']);
    Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');


    Route::get('/admin/dashboard', function(){
      return view('admin.dashboard');
    });

    //route for managing the user through the admin panel
    Route::get('/admin/dashboard', [AdminUserManagement::class, 'index'])
    ->name('admin.users.management');
    Route::get('/admin/dashboard/userData/{id}', [AdminUserManagement::class, 'userData'])
    ->name('admin.users.management.userData');
    Route::delete('/admin/deleteUserData/{id}', [AdminUserManagement::class, 'destroy'])
    ->name('admin.deleteUserData');


    //the admin controlls the house listing through this route
    Route::get('/admin/listing', [AdminListingModerationController::class, 'index'])
    ->name('admin.listing.moderation');
    Route::delete('/admin/listing/destroy/{id}', [AdminListingModerationController::class, 'destroy'])
    ->name('admin.listing.destroy');


    //all about guilding the users chat
    Route::get('/admin/communication', [AdminCommunicationHubController::class, 'index'])
    ->name('admin.communication.hub');

    //route for feedback and users complain
    Route::get('/admin/support', [AdminSupportTicketController::class, 'index'])
    ->name('admin.support.ticket');


    //route for all the blog stuff the admin guy have to do
    //this route handles the blog post from the admin side
    Route::get('/admin/blog', [AdminBlogController::class, 'index'])
    ->name('admin.blog.index');
    Route::get('/admin/blog/create', [AdminBlogController::class, 'create'])
    ->name('admin.blog.create');
    Route::post('/admin/blog/store', [AdminBlogController::class, 'store'])
    ->name('admin.blog.store');
    Route::get('/admin/blog/showAll', [AdminBlogController::class, 'showAllBlogPost'])
    ->name('admin.blog.showAllPost');
    Route::get('/admin/blog/editForm/{id}', [AdminBlogController::class, 'editForm'])
    ->name('admin.blog.editform');
    Route::put('/admin/blog/update/{id}', [AdminBlogController::class, 'update'])
    ->name('admin.blog.update');
    Route::get('/admin/blog/show/{id}', [AdminBlogController::class, 'show'])
    ->name('admin.blog.show');
    Route::delete('/admin/blog/destroy/{id}', [AdminBlogController::class, 'destroy'])
    ->name('admin.blog.destroy');

});
