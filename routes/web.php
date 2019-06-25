<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//首頁
Route::get('/', 'MerchandiseController@IndexPage');
//使用者
Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('/sign-up', 'UserAuthController@signUpPage');
        Route::post('/sign-up', 'UserAuthController@signUpProcess');
        Route::get('/sign-in', 'UserAuthController@signInPage');
        Route::post('/sign-in', 'UserAuthController@signInProcess');
        Route::get('/sign-out', 'UserAuthController@signOut');
    });
});

//商品
Route::group(['prefix' => 'merchandise'], function () {
    Route::get('/', 'MerchandiseController@merchandiseListPage');
    Route::get('/create', 'MerchandiseController@merchandiseCreateProcess')->middleware(['user.auth.admin']);
    Route::get('/manage', 'MerchandiseController@merchandiseManageListPage')->middleware(['user.auth.admin']);
    Route::group(['prefix' => '{merchandise_id}'], function () {
        Route::get('/', 'MerchandiseController@merchandiseItemPage');
        Route::group(['middleware' =>['user.auth.admin']], function () {
            Route::get('/edit', 'MerchandiseController@merchandiseItemEditPage');
            Route::put('/', 'MerchandiseController@merchandiseItemUpdateProcess');
        });
        Route::post('/buy', 'MerchandiseController@merchandiseItemBuyProcess')->middleware(['user.auth']);
    });
});

//交易
Route::get('/transaction', 'TransactionController@transactionListPage')->middleware(['user.auth']);

