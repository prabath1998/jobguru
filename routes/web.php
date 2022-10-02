<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Listing;

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

//All listings
Route::get('/', [ListingController::class, 'index']);

//store listing data
Route::post('/listings', [ListingController::class, 'store']);

//show create form
Route::get('/listings/create', [ListingController::class, 'create']);




//Single listing
Route::get('/listing/{listing}',  [ListingController::class, 'show']);
