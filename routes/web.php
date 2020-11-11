<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoPlayController;
use App\Http\Controllers\news;
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
Route::get('/', [news::class, 'news_page']);
Route::get('/pages/places', [places::class, 'places_page'])->name('places');    
Route::get('/pages/places1', [places::class, 'places1_page'])->name("places1");
Route::get('/pages/places2', [places::class, 'places2_page'])->name("places2");
Route::get('/pages/lodging', [lodging::class, 'lodging_page'])->name('lodging');  
Route::get('/pages/lodging1', [lodging::class, 'lodging1_page'])->name('lodging1');  
Route::get('/pages/lodging2', [lodging::class, 'lodging2_page'])->name('lodging2');  
Route::get('/pages/food', [food::class, 'food_page'])->name('food');
Route::get('/pages/food1', [food::class, 'food1_page'])->name('food1');
Route::get('/pages/food2', [food::class, 'food2_page'])->name('food2');
Route::get('/pages/traffic1', [traffic::class, 'traffic_page']);
Route::get('/logout/', [VideoPlayController::class, 'logout']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    global $username;
    return view ('dashboard', compact('username'));
})->name('dashboard');