<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
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

Route::get('/', [IndexController::class , 'welcome']);

Route::get('/test', function () {
    return view('test',
    [
        'name' => 'Arman' ,
        'records' => [1,2] ,
         'i' => 1,
         'colors' => ["red","green","blue"]
    ]);
});

Route::get('blade', function () {
    return view('child');
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get(
    'posts/{post}/comments/{comment}',
    function ($postId, $commentId) {
        return "post $postId , comment $commentId";
    }
);

Route::get('/user/{id}', [
    UserController::class,
    'show'
]);

Route::resource('photos', PhotoController::class);

Route::get('/countries', [CountriesController::class , 'countries']);
