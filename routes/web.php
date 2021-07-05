<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
Route::get('/readmore/{post}', function (post $post) {
    //$product= product::find($id);
    return view('post', ['post' => $post]);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\BlogController::class, 'index']);
    Route::get('/blog/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('create_post');
    Route::post('/blog/store', [App\Http\Controllers\Admin\BlogController::class, 'store']);
    Route::get('/blog/index', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('post_list');

    Route::get('admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
        ->name('dashboard');
});
