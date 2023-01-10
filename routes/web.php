<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
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

//rotta che rimanda all'url admin/ e alla funzione index nel DashboardController, 
Route::get('admin/', [DashboardController::class, 'index'])
    //con un passaggio di verifica 
    ->middleware(['auth', 'verified'])
    //e nuovo nome della rotta
    ->name('admin.dashboard');


require __DIR__ . '/auth.php';
