<?php

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
// Route::get('/', function () {
//     return view('welcome');
// });
/*
*Laravel8の変更点の一つである「RouteServiceProvider.phpファイルからデフォルトの名前空間を削除」したのが大きく関係しているため完全な名前空間を使用する
*/

Route::get('/', 'App\Http\Controllers\ContactController@input');
