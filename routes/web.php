<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllUsersController;
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
Route::get('/allUsers', [allUsersController::class, 'view' ]);
Route::get('/allUsers/delete/{id}', [allUsersController::class, 'delete' ]);
Route::view('/allUsers/add', 'Users.add');
Route::post('/allUsers/add', [allUsersController::class, 'add' ]);
Route::get('/allUsers/update/{id}', [allUsersController::class, 'update' ]);
Route::post('/allUsers/update', [allUsersController::class, 'updateData' ]);