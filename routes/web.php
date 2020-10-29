<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoPlayController;
use App\Http\Controllers\places;
use App\Http\Controllers\lodging;
use App\Http\Controllers\food;
use App\Http\Controllers\traffic;
use Illuminate\Support\Facades\Auth;

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
$username = "Guest";
if (Auth::check()) {
    $user = Auth::user();
    $username = $user->name;
}
Route::get('/', [VideoPlayController::class, 'index']);
Route::get('/pages/places1', [places::class, 'places_page']);
Route::get('/pages/lodging1', [lodging::class, 'lodging_page']);
Route::get('/pages/food1', [food::class, 'food_page']);
Route::get('/pages/traffic1', [traffic::class, 'traffic_page']);
Route::get('/logout/', [VideoPlayController::class, 'logout']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    global $username;
    return view ('dashboard', compact('username'));
})->name('dashboard');