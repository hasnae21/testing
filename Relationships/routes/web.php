<?php
namespace App\Http\Controllers;

use App\Http\Controllers\UserController;

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

Route::get('one', [UserController::class, 'OneToOne']);
Route::get('many', [UserController::class, 'OneToMany']);

//BelongsTo
// route::get('belongsTo',[UserController::class,"belongsTo"]);
// route::get('belongsToMany',[UserController::class,"belongsToMany"]);