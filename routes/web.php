<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibroController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function(){
    return view('welcome');
    // return view('auth.login');
});
// Route::get('/', function () {
//     return redirect()->route('libro.index');
// });
// Route::get('/', function(){
//     return view('libros.index');
// })->name('libros.index');
// Route::get( '/libro',[LibroController::class, 'index'] )->name('libros.index');

// Auth::


Route::resource('libro', LibroController::class)
    ->except(['show'])
    ->middleware('auth');


# No mostramos el registro ni el reset de password. 
Auth::routes(['register' => false, 'reset' => false]);


# Restringir los accesos.
Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Route::resource('libro', LibroController::class);

} );
