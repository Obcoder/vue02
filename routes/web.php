<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'title' => 'CLUPEA',
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/countries/', [\App\Http\Controllers\CountryController::class, 'index'])->name('countries');
Route::get('/api/countries/', [\App\Http\Controllers\API\CountryController::class, 'index'])
    ->name('api.countries');
Route::post('/country/save/', [\App\Http\Controllers\CountryController::class, 'store'])
    ->name('country.save');
Route::get('/regions/', [\App\Http\Controllers\RegionController::class, 'index'])->name('regions');
