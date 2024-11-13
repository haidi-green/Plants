<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [PlantController::class, 'index']);
Route::get('/plants', [PlantController::class, 'index']);

Route::get('/create', [PlantController::class, 'create']);
Route::post('/create/store', [PlantController::class, 'store']);

Route::get('/plants/show/{plant}', [PlantController::class, 'show']);

Route::get('/plants/edit/{plant}', [PlantController::class, 'edit']);
Route::put('/plants/update/{plant}', [PlantController::class, 'update']);

Route::get('/plants/destroy/{plant}', [PlantController::class, 'destroy']);
