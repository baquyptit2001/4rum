<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Models\Question;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::prefix('users')->group(function () {
    Route::get('/login', [UserController::class, 'index'])->name('user.login.page')->middleware('guest');
    Route::post('/login', [UserController::class, 'login'])->name('user.login');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout')->middleware('auth');
    Route::get('/signup', [UserController::class, 'signupPage'])->name('user.signup.page')->middleware('guest');
    Route::post('/signup', [UserController::class, 'signup'])->name('user.signup.page')->middleware('guest');
});

Route::resource('questions', QuestionController::class,['except' => [
    'show'
]]);
Route::get('/questions/{slug}', [QuestionController::class, 'show'])->name('questions.show');
Route::post('/questions/answer', [AnswerController::class, 'store'])->name('questions.answer');
