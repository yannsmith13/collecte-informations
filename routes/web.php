<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


///////////////////////////////////////////////////////////////////////////////
Route::get('/formulaire/{customer}', [FormController::class, 'index'])->name('form.index');
Route::post('/formulaire', [FormController::class, 'store'])->name('form.store');
Route::get('/pdf/{customer}', [FormController::class, 'downloadPDF'])->name('form.pdf');



Route::group(['middleware' => 'auth'], function() {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/', [AdminController::class, 'newForm'])->name('admin.newForm');

});






require __DIR__.'/auth.php';
