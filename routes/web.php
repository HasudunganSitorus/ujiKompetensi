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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// use App\Models\Item;
// Route::get('/home', function () {
//      $item =  Item::with('child')->get();
//      print($item);
// });
Route::resource('customer', 'CustomerController');
Route::resource('parent', 'ParentController');
Route::resource('child', 'Api\ChildController');