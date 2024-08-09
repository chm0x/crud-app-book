<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibroController;

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
    return redirect()->route('libro.index');
});
// Route::get('/', function(){
//     return view('libros.index');
// })->name('libros.index');
// Route::get( '/libro',[LibroController::class, 'index'] )->name('libros.index');

Route::resource('libro', LibroController::class);