<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


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
    return view('welcome');
})->name('welcome');

Route::get('/contract', function () {
    return view('contract');
})->name('contract');

// Route::get('/cart', function () {
//     return view('cart');
// })->name('cart');

Route::get('/intro', function () {
    return view('intro');
})->name('intro');

Route::get('/photo', function () {
    return view('photo');
})->name('photo');

// Route::get('/admin', function () {
//     return view('admin.admin');
// })->middleware(['auth', 'verified'])->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('AdminDashboard');
});



require __DIR__.'/auth.php';

// routes/web.php



Route::middleware(['auth'])->group(function () {
    // Các route yêu cầu đăng nhập sẽ ở đây.
    Route::get('/upload', [FileController::class, 'showForm']);
    Route::post('/upload', [FileController::class, 'uploadFile'])->name('upload.file');
   

});
Route::get('/download/{path}', [FileController::class, 'download'])->name('download.file');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/file/delete/{id}', [FileController::class, 'deleteFile'])->name('file.delete');
