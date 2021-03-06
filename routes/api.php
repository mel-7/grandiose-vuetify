<?php

use Illuminate\Http\Request;

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

// Route::resource('user', 'UserController');
// Route::resource('user', 'UserController')->middleware('auth:api');
// Route::middleware('auth:api')->get('/user', function(Request $request) {
//     return $request->user();
// });

Route::get('/products', 'ProductController@productListAPI')->name('products');
Route::get('/product/category/list', 'ProductCategoriesController@productCategoriesListAPI')->name('productcategorieslist');
Route::get('/product/category/tree', 'ProductCategoriesController@productCategoriesTreeAPI')->name('productcategoriestree');
Route::get('/product/category/fields/{id}', 'ProductCategoryFieldsController@categoryFieldsAPI')->name('categoriesfields');