<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SearchController;

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

Route::get('/', function () {
    return redirect(route('login'));
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
// });


Route::get('/productos', [ProductoController::class, 'index'])
            ->name('productos.index')
            ->middleware('auth');

Route::get('/productos/create', [ProductoController::class, 'create'])
            ->name('productos.create')
            ->middleware('auth');

Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])
            ->name('productos.edit')
            ->middleware('auth');

Route::delete('/productos/{id}/destroy', [ProductoController::class, 'destroy'])
            ->name('productos.destroy')
            ->middleware('auth');

Route::get('/productos/{id}/show', [ProductoController::class, 'show'])
            ->name('productos.show')->middleware('auth')
            ->middleware('auth');

Route::get('/search/{query}', [SearchController::class, 'index'])
            ->name('search.index')
            ->middleware('auth');

Route::get('/cajero/view', function(){
    return view('cajero.view');
})->name('cajero.view')->middleware('auth');
