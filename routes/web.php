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



	Route::get('/', function () {
	    return view('home');
	})->middleware('auth','admin');

	Route::get('/charts', function () {
	    return view('/views/charts');
	});

    Route::get('/main', function () {
	    return view('/views/main');
	});
    Route::get('/calc', function () {
	    return view('/calc');
	});
    Route::get('/backup', function () {
        Spatie\DbDumper\Databases\Sqlite::create()
            ->setDbName(env('DB_DATABASE'))
            ->dumpToFile('dump.sql');
        \Session::flash('msg','تم انشاء نسخه احتياطيه.');
        return back();

    });


Route::post('/importExport', 'HomeController@importExcel')->name('import');
// -------------------------------- Settings ------------------------------- //
Route::get('/settings', 'SettingController@index');
Route::post('/settings', 'SettingController@update');

// -------------------------------- User ------------------------------- //
Route::get('/users/data', 'UserController@anyData');
Route::resource('/users', 'UserController');
Route::get('/users/{id}/delete', 'UserController@destroy');

// -------------------------------- Categories ------------------------------- //
Route::resource('/areas', 'AreaController');
Route::get('/areas/{id}/delete', 'AreaController@destroy');

Route::resource('/sections', 'SectionController');
Route::get('/sections/{id}/delete', 'SectionController@destroy');
Route::resource('/branches', 'BranchController');
Route::get('/branches/{id}/delete', 'BranchController@destroy');

Route::resource('/classifications', 'ClassificationController');
Route::get('/classifications/{id}/delete', 'ClassificationController@destroy');

Route::get('/suppliers/data', 'SupplierController@anyData');
Route::resource('/suppliers', 'SupplierController');
Route::resource('/units', 'BranchController');

Route::get('/assets/data', 'AssetController@anyData');
Route::post('/assets/deletes', 'AssetController@deletes');
Route::get('/assets/{id}/delete', 'AssetController@destroy');
Route::resource('/assets', 'AssetController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
