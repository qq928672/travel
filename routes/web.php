<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoPlayController;
use App\Http\Controllers\places;
use App\Http\Controllers\news;
use App\Http\Controllers\Sp_places;
use App\Http\Controllers\art_places;
use App\Http\Controllers\lodging;
use App\Http\Controllers\hotel_lodging;
use App\Http\Controllers\Motel_lodging;
use App\Http\Controllers\food;
use App\Http\Controllers\hit_food;
use App\Http\Controllers\local_food;
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
Route::get('/', [news::class, 'news_page']);
Route::get('/pages/places1', [places::class, 'places_page']);
Route::get('/pages/places2', [Sp_places::class, 'Sp_places_page']);
Route::get('/pages/places3', [art_places::class, 'art_places_page']);
Route::get('/pages/lodging1', [lodging::class, 'lodging_page']);
Route::get('/pages/lodging2', [hotel_lodging::class, 'hotel_lodging_page']);
Route::get('/pages/lodging3', [Motel_lodging::class, 'Motel_lodging_page']);
Route::get('/pages/food1', [food::class, 'food_page']);
Route::get('/pages/food2', [local_food::class, 'local_food_page']);
Route::get('/pages/food3', [hit_food::class, 'hit_food_page']);
Route::get('/pages/traffic1', [traffic::class, 'traffic_page']);
Route::get('/logout/', [VideoPlayController::class, 'logout']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    global $username;
    return view ('dashboard', compact('username'));
})->name('dashboard');