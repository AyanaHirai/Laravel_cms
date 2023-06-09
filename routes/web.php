<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; //追加
use App\Models\Book; //追加
use App\Http\Controllers\SkillTestController; //追加
use App\Models\SkillTest; //追加
use App\Http\Controllers\UserController;
use App\Models\User;

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

//本：ダッシュボード表示(books.blade.php)
Route::get('/', [BookController::class,'index'])->middleware(['auth'])->name('book_index');
Route::get('/dashboard', [BookController::class,'index'])->middleware(['auth'])->name('dashboard');

//本：追加 
Route::post('/books',[BookController::class,"store"])->name('book_store');

//本：削除 
Route::delete('/book/{book}', [BookController::class,"destroy"])->name('book_destroy');

//本：更新画面
Route::post('/booksedit/{book}',[BookController::class,"edit"])->name('book_edit'); //通常
Route::get('/booksedit/{book}', [BookController::class,"edit"])->name('edit');      //Validationエラーありの場合

//本：更新画面
Route::post('/books/update',[BookController::class,"update"])->name('book_update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// //スキルテスト：ダッシュボード表示(books.blade.php)
// Route::get('/', [SkillTestController::class,'index'])->middleware(['auth'])->name('book_index');
Route::get('/profile', [SkillTestController::class,'edit'])->middleware(['auth'])->name('profile.edit');

Route::get('/skill_test', [SkillTestController::class, 'index'])->name('skill_test.index');
// Route::get('/profile', [SkillTestController::class, 'index'])->name('skill_test.index'); //スキルテストの回答をプロフィールに反映

//スキルテスト：追加 
Route::post('/skill_tests',[SkillTestController::class,"store"])->name('skill_test_store');
// Route::post('/profile',[SkillTestController::class,"store"])->name('skill_test_store');

// Route::get('profile/edit', [ProfileController::class, 'edit']);

//ユーザー閲覧
// Route::get('/users', [UserController::class, 'index']);
//ダッシュボード表示(books.blade.php)
Route::get('/', [UserController::class,'index'])->middleware(['auth'])->name('user_index');
Route::get('/dashboard', [UserController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('/secretary/{user_id}', [ProfileController::class,'browse'])->name('profile.browse');



require __DIR__.'/auth.php';
