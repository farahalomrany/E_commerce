<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//hala
Route::get('/products', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@show');
Route::post('/products/store', 'ProductController@store');
Route::post('/products/update/{id}', 'ProductController@update');
Route::post('/products/delete/{id}', 'ProductController@delete');
Route::get('/order/in_user/{id}','OrderController@show_by_user');

//tasneem
Route::get('/categories','CategoryController@index');
Route::get('/categories/{id}','CategoryController@show');
Route::post('/categories/store','CategoryController@store');
Route::post('/categories/update/{id}','CategoryController@update');
Route::post('/categories/delete/{id}','CategoryController@delete');

Route::get('/products/in_category/{id}','ProductController@show_by_category');
Route::post('/products/date/','ProductController@show_by_date');
Route::get('/product/csv/','ProductController@Export_into_exel');
Route::post('product1/csv/{id}','EmployeeExport@collection');
Route::get('/detail/csv/','OrderController@Export_into_exel');
Route::get('/order/csv/','Order_detailController@Export_into_exel');

Route::post('/order/store','Order_detailController@store');
Route::get('/order/next','OrderController@return_next_order');
Route::post('/product/vote/','ProductController@vote');


//farah
//StateController
Route:: post('/states/store', 'StateController@store');
Route:: get('/states/index', 'StateController@index');

//LocationController
Route:: post('/location/store', 'LocationController@store');
Route:: get('/locations/index', 'LocationController@index');
Route:: get('/locations/showlocationbyid/{state_id}', 'LocationController@show_location_by_id');


//BrandController
Route:: post('/brand/store', 'brandController@store');
Route:: get('/brands/index', 'brandController@index');



//CategoryController
//Route:: post('/category/store', 'CategoryController@store');
//Route:: get('/categories/index', 'CategoryController@index');

//ProductController
//Route:: post('/product/store', 'ProductController@store');
//Route:: get('/products/index', 'ProductController@index');
Route:: post('/products/bycolorsizeprice', 'ProductController@show_products_by_color_size_price');


//UserController
Route:: get('/users/index', 'UserController@index');

Route:: post('/users/store', 'UserController@store');

Route:: post('/users/update', 'UserController@update_user');

Route:: get('/users/showphone/{phone}', 'UserController@show_user_by_phone');

Route::group(['prefix' => 'user'],function (){
        Route::post('login', 'UserController@login');

        Route::post('logout','UserController@logout') -> middleware(['auth.guard:user-api']);

 });

Route::group(['prefix' => 'user' ,'middleware' => 'auth.guard:user-api'],function (){
    //auth.guard:user-api  handel token to any user or admin it belong
 Route::post('profile',function(){
        return \Auth::user();//return authenticated user data
    
     }) ;
}) ;




