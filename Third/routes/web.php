<?php

//use App\Http\Controllers\MainController;
use Illuminate\support\Facades\Route;
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

Route::get('/', 'MainController@home');
//Route::get('/', [FirstController::class,'home']);

Route::get('/about', 'MainController@about');
//Route::get('/about', [FirstController::class,'about']);

Route::get('/review', 'MainController@review');




//Route::get('/user/{id_user}/{name_user}', function ($id_user, $name_user) {   //чтобы поучить данные с url адресса
//    return 'id:' . $id_user . ", name:" . $name_user;
//});

