<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Front@index');

//this route is for pm page
Route::get('/pm',[
    'middleware' =>'auth',
    'uses' => 'Front@pm'
]);

Route::get('/pm/job/new',[
    'middleware' =>'auth',
    'uses' => 'PmController@newPmJob'
]);
Route::post('/pm/job/update',[
    'middleware' =>'auth',
    'uses' => 'PmController@updatePmJob'
]);

Route::post('/pm/job/new/submit',[
    'middleware' =>'auth',
    'uses' => 'PmController@newPmJobSubmit'
]);
Route::post('/pm/job/update/submit',[
    'middleware' =>'auth',
    'uses' => 'PmController@updatePmJobSubmit'
]);
Route::get('/pm/ppm/report',[
    'middleware' =>'auth',
    'uses' => 'PmController@report'
]);

Route::get('/pm/report/export',[
    'middleware' =>'auth',
    'uses' => 'PmController@exportReport'
]);
Route::post('/pm/location/add/submit',
	[
    'middleware' =>'auth',
    'uses' =>'PmController@addLocation'
]);

Route::get('/pm/report/edit/update/{id}',
	[
    'middleware' =>'auth',
    'uses' =>'PmController@pmReportUpdate'
]);
Route::get('/pm/report/edit/delete/{id}',
	[
    'middleware' =>'auth',
    'uses' =>'PmController@pmReportDelete'
]);
Route::get('/pm/report/edit/tag/{id}',
	[
    'middleware' =>'auth',
    'uses' =>'PmController@pmReportTag'
]);

//routes for pm end

//route for cm
Route::get('/cm',[
    'middleware' =>'auth',
    'uses' =>'Front@cm'
]);
Route::get('/cm/job/new','CmController@newJob');
Route::post('/cm/job/update','CmController@updateJob');
Route::post('/cm/report/weekly/submit','CmController@weeklyReport');
Route::post('/cm/report/monthly/submit','CmController@monthlyReport');
Route::post('/cm/report/location/submit','CmController@locationReport');

Route::get('/cm/job/new/update',
	[
	  'middleware' => 'auth',
	  'uses' =>'CmController@newUpdate'
	]);

Route::get('/cm/reports',
	[
	  'middleware' => 'auth',
	  'uses' =>'CmController@reports'
	]);

Route::post('/cm/job/new/submit',
	[
    'middleware' =>'auth',
    'uses' =>'CmController@cmJobSubmit'
]);
Route::post('/cm/job/update/submit',
	[
    'middleware' =>'auth',
    'uses' =>'CmController@cmJobUpdateSubmit'
]);

Route::get('/cm/report/edit/update/{id}',
	[
    'middleware' =>'auth',
    'uses' =>'CmController@cmReportUpdate'
]);
Route::get('/cm/report/edit/delete/{id}',
	[
    'middleware' =>'auth',
    'uses' =>'CmController@cmReportDelete'
]);
Route::get('/cm/report/edit/tag/{id}',
	[
    'middleware' =>'auth',
    'uses' =>'CmController@cmReportTag'
]);
Route::post('/cm/location/add/submit',
	[
    'middleware' =>'auth',
    'uses' =>'CmController@addLocation'
]);

//routes that intercepts add codes
Route::post('/cm/code/report/add/submit',[
    'middleware' =>'auth',
    'uses' =>'CmController@addReportCode'
]);
Route::post('/cm/code/repair/add/submit',[
    'middleware' =>'auth',
    'uses' =>'CmController@addRepairCode'
]);
Route::post('/cm/code/fault/add/submit',[
    'middleware' =>'auth',
    'uses' =>'CmController@addFaultCode'
]);
Route::post('/cm/code/rootCause/add/submit',[
    'middleware' =>'auth',
    'uses' =>'CmController@addRootCauseCode'
]);
//end rootes for cm


// Authentication routes...
Route::get('auth/login','Front@login');

Route::post('auth/login', 'Front@authenticate');
Route::get('auth/logout', 'Front@logout');
Route::get('auth/password/reset', 'Front@resetPasswordView');
Route::get('auth/password/reset/submit', 'Front@resetPassword');
// Registration routes...
Route::post('/register', 'Front@register');

// Registration routes...