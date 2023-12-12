<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NotificationController;
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
})->name('home');

Route::get('/users',[UserController::class, 'index'])->name('users.index')->middleware('auth');

Route::get('/users/create',[UserController::class, 'create'])->name('users.create')->middleware('admin');

Route::post('/users',[UserController::class, 'store'])->name('users.store')->middleware('auth');

Route::get('/users/{id}', [UserController::class,'show'])->name('users.show')->middleware('auth');

Route::delete('/users/{id}',[UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');


Route::get('/posts',[PostController::class, 'index'])->name('posts.index')->middleware('auth');

Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create')->middleware('auth');

Route::post('/posts',[PostController::class, 'store'])->name('posts.store')->middleware('auth');

Route::get('/posts/{id}',[PostController::class, 'show'])->name('posts.show')->middleware('auth');

Route::delete('/posts/{id}',[PostController::class, 'destroy'])->name('posts.destroy')->middleware('auth');

Route::get('/admin/posts/{post_id}',[PostController::class, 'edit'])->name('posts.edit')->middleware('auth');

Route::put('/posts/update/{post_id}',[PostController::class, 'update'])->name('posts.update')->middleware('auth');



Route::get('/threads',[ThreadController::class, 'index'])->name('threads.index')->middleware('auth');

Route::get('/threads/create',[ThreadController::class, 'create'])->name('threads.create')->middleware('admin');

Route::post('/threads',[ThreadController::class, 'store'])->name('threads.store')->middleware('auth');

Route::get('/threads/{id}',[ThreadController::class, 'show'])->name('threads.show')->middleware('auth');

Route::delete('/threads/{id}',[ThreadController::class, 'destroy'])->name('threads.destroy')->middleware('auth');


Route::get('/categories',[CategoryController::class, 'index'])->name('categories.index')->middleware('auth');

Route::get('/categories/create',[CategoryController::class, 'create'])->name('categories.create')->middleware('auth');

Route::post('/categories',[CategoryController::class, 'store'])->name('categories.store')->middleware('auth');

Route::get('/categories/{id}',[CategoryController::class, 'show'])->name('categories.show')->middleware('auth');

Route::delete('/categories/{id}',[CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('auth');


Route::get('/register',[RegisterController::class, 'create'])->name('register.create')->middleware('guest');
Route::post('/register',[RegisterController::class, 'store'])->name('register.store')->middleware('guest');

Route::get('/login',[SessionController::class, 'create'])->name('login.create')->middleware('guest');
Route::post('/login',[SessionController::class, 'store'])->name('login.session')->middleware('guest');

Route::post('/logout',[SessionController::class, 'destroy'])->name('logout.destroy')->middleware('auth');


Route::post('/posts/{post:id}/comments',[CommentController::class, 'store'])->name('comments.store')->middleware('auth');

Route::get('/notifications',[NotificationController::class, 'index'])->name('notifications.index')->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
