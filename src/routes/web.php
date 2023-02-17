<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

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
// welcome.phpを見せるもの

// Route::get('/hello',function (){
//     return '<html><body><h1>Hello</h1><p>This is sample page.
//     </p></body></html>';
// });
Route::get('/hello','App\Http\Controllers\HelloController@index');
Route::get('/quiz','App\Http\Controllers\QuizController@index')->middleware('auth');
// 基本的にはこれで書くし、この中にuseのコマンドの役割も入っている
// リンク先、どのコントローラーかを指定し@の後ろにアクション（表示するという命令）
// Route::get('/hello',[HelloController::class,'index']);
// useでcontrollerを呼び出すときはこう書く
Route::get('/quiz/{id}','App\Http\Controllers\QuizController@indexquiz');
#@indexquizでidをquizに送ってくれている

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', function () {
    Auth::logout();
    return view('/auth/login');
});
