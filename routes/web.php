<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
/*
 User routes
 */


Route::get('/', function () {
    return view('user.welcome');
})->name('welcome');

Route::get('/products', function (){
    return view('user.products');
});

Route::get('/product', function (){
    return view('user.product');
});

Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {


});

/*
All Admin Routes List
*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');

    Route::get('/admin/products', function (){
        return view('admin.products');
    });
});

/*
All warehouse Routes List
*/
Route::middleware(['auth', 'user-access:warehouse'])->group(function () {

    Route::get('/warehouse/dashboard', [HomeController::class, 'warehouseHome'])->name('warehouse.dashboard');
});
