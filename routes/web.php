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


Route::get('/',[
    'as'=>'trangchu',
    'uses'=>'PageController@getIndex'
]);
Route::get('/dangnhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@getDangnhap'
]);
Route::post('/',[
    'as'=>'postdangnhap',
    'uses'=>'PageController@postDangnhap'
]);
Route::get('/dangxuat',[
    'as'=>'dangxuat',
    'uses'=>'PageController@getDangxuat'
]);
Route::get('/dangky',[
    'as'=>'dangky',
    'uses'=>'PageController@getDangky'
]);
Route::get('/giohang',[
    'as'=>'giohang',
    'uses'=>'PageController@getGiohang'
]);
Route::get('/thanhtoan',[
    'as'=>'thanhtoan',
    'uses'=>'PageController@getThanhtoan'
]);
Route::get('/daugia/{id}',[
    'as'=>'daugia',
    'uses'=>'PageController@getDaugia'
]);
// Route::post('/dau-gia',[
//     'as'=>'postdaugia',
//     'uses'=>'PageController@postdaugia'
// ]);
Route::get('/postdaugia/{id}',[
    'as'=>'postdaugia',
    'uses'=>'PageController@postDaugia'
]);

Route::get('/add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtocart']);














// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// // <==============================>
// // 		ExampleController
Route::get('/dangnhap1',[
    'as'=>'dangnhap1',
    'uses'=>'ExampleController@getDangnhap'
]);
Route::post('/logined1',[
    'as'=>'logined1',
    'uses'=>'ExampleController@logined1'
]);

Route::post('/logined2',[
    'as'=>'logined2',
    'uses'=>'ExampleController@logined2'
]);
// Route::get('/dangnhap1',[
//     'as'=>'logined',
//     'uses'=>'LoginController@getlogin'
// ]);

// Route::get('/verify',function () {
//     return "Form was submited !";
// });
// // Route::post('/verify',function () {
// //     return "Form was POST_ed !";
// // });

