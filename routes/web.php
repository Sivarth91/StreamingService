<?php

use App\Http\Controllers\Admin\MovieController;
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

Route::get('/', function () {
    return view('index');
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::resource('movie', MovieController::class)->except(['show']);
});


/*Route::get('/movie', function (Request $request) {
    return [
        "title" => $request->input("title", "Inconnu"),
        "desc" => "this is a movie"
    ];
});
*/
