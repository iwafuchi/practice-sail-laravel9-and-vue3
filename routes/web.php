<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\InertiaTestController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustomerController;

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

Route::get('/vue', function () {
    return Inertia::render('Payment');
});

Route::get('vue/tweet', function () {
    return Inertia::render('App');
});

Route::resource('items', ItemController::class)
    ->middleware(['auth', 'verified']);

Route::resource('customers', CustomerController::class)
    ->middleware(['auth', 'verified']);


Route::get('/inertia-test', function () {
    return Inertia::render('InertiaTest');
});

Route::get('/inertia-slot', function () {
    return Inertia::render('InertiaSlot');
});

Route::get('/component-test', function () {
    return Inertia::render('ComponentTest');
});

Route::get('/inertia/index', [InertiaTestController::class, 'index'])
    ->name('inertia.index');

Route::get('/inertia/create', [InertiaTestController::class, 'create'])
    ->name('inertia.create');

Route::get('/inertia/State', [InertiaTestController::class, 'StateTest'])
    ->name('inertia.state');

Route::post('/inertia', [InertiaTestController::class, 'store'])
    ->name('inertia.store');

Route::get('/inertia/show/{id}', [InertiaTestController::class, 'show'])
    ->name('inertia.show');

Route::delete('/inertia/{id}', [InertiaTestController::class, 'delete'])
    ->name('inertia.delete');


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
