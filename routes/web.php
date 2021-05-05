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
use Illuminate\Support\Facades\Route as Route;
Route::group(['namespace' => 'Front'], function () {

    Route::get('/','FrontendController@front')->name('front');
    Route::get('/about', 'FrontendController@about')->name('about');
    Route::get('/tour', 'FrontendController@tour')->name('tour');
    Route::get('/destination', 'FrontendController@destination')->name('destination');
    Route::get('/blog', 'FrontendController@blog')->name('blog');

    Route::get('contact', 'ContactFormController@create')->name('contact.create');

    
    Route::get('/category','FrontendController@bycategory')->name('category');
    // Route::get('/package/{id}','FrontendController@package')->name('package');

    Route::get('/hotel/{id}','FrontendController@photel')->name('package');

    Route::get('/room/{id}','FrontendController@room')->name('room');


    // Hotel search
     Route::get('hotel_search','FrontendController@hotel_search')->name('hotel_search');

    //Search available room from the  given hotel lists
    Route::get('room_search','FrontendController@room_search')->name('room_search');

    // All Rooms of particular hotel
    Route::get('allrooms/{id}/{name}','FrontendController@allrooms')->name('allrooms');
    // Location search
    Route::get('locationsearch','FrontendController@locationsearch')->name('locationsearch');
     Route::get('apply','FrontendController@apply')->name('apply');
    //    Route::get('front','FrontendController@front')->name('front');

Route::post('/apply',[
    'uses'=>"BookController@store",
    "as"=>'apply'
]);

Route::get('/roomcheck',[
    'uses'=>"BookController@check",
    "as"=>'roomcheck'
]);

Route::post('/confirm-book',[
    'uses'=>"BookController@confirmbook",
    "as"=>'confirm-book'
]);

// Route::get('book/{id}',[
//     'uses'=>"BookController@show",
//     "as"=>"book"
// ]);

Route::get('book/{id}/{roomname}',[
    'uses'=>"FrontendController@book",
    "as"=>"book"
]);
Route::post('confirm',[
    'uses'=>"FrontendController@confirm",
    "as"=>"confirm"
])->middleware('auth');
Route::get('/pay/id',[
    'middleware'=>"auth",
    function () {
    return view('complete');
}])->name('pay');
});

Route::group(['prefix'=>'supplier','namespace'=>'Supplier'],function(){
    Route::get('supplier',[
        'uses'=>'SupplierController@index',
        'as'=>'supplier.index'
    ])->middleware('supplier');

      Route::get('supplier/active',[
        'uses'=>'SupplierController@active',
        'as'=>'supplier.active'
    ])->middleware('auth');

      Route::get('supplier/create',[
        'uses'=>'SupplierController@create',
        'as'=>'supplier.create'
    ]);
 Route::get('supplier/on/{id}',[
        'uses'=>'SupplierController@on',
        'as'=>'supplier.on'
    ]);

    Route::get('supplier/off/{id}',[
        'uses'=>'SupplierController@off',
        'as'=>'supplier.off'
    ]);
    Route::post('supplier/update/{id}',[
        'uses'=>'SupplierController@update',
        'as'=>'supplier.update'
    ]);

      Route::post('supplier/store',[
        'uses'=>'SupplierController@store',
        'as'=>'supplier.store'
    ]);
    Route::get('login',[
        'uses'=>'SupplierController@login',
        'as'=>'supplier.login'
        ]);
         Route::post('logout',[
        'uses'=>'SupplierController@logout',
        'as'=>'supplier.logout'
        ]);
         Route::post('login/check',[
        'uses'=>'SupplierController@login_check',
        'as'=>'supplier.login_check'
        ]);
});

Route::group(['prefix' =>'admin','namespace'=>'Admin'], function () {
Route::get('/dashboard',[
        'uses'=>"DashboardController@index",
        "as"=>"dashboard"
    ]);
 Route::resource('/blogs', 'BlogController');
 Route::resource('room', 'RoomController');
 Route::resource('facility', 'FacilityController');
 Route::resource('hotel', 'HotelController');
 Route::resource('roomphotos', 'RoomimagesController');
 Route::resource('roommanagement', 'RoommanagementController');
 Route::resource('category', 'CategoryController');


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('register/customer', 'CustomerController@customerregister');
Route::post('customer/store', 'CustomerController@customerstore')->name('customerstore');
Route::post('/login/check', 'CustomerController@authenticate')->name('customercheck');
Route::get('customer/login', 'CustomerController@login')->name('customerlogin');




