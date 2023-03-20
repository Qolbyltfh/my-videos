<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

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
    return view('welcome');
    return redirect('fetch_video');
});

Route::get('/fetch_video',[VideoController::class,'fetch']);
Route::get('/index_u',[VideoController::class,'index']);
Route::post('/insert_video',[VideoController::class,'insert'])->name('insert.file');