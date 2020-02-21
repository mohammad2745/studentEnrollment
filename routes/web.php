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
    return view('student_login');
});

Route::get('/admin', function () {
    return view('admin.admin_login');
});

// Route::get('/student_dashboard','AdminController@student_dashboard');

Route::get('/student_dashboard',[
  'uses' => 'AdminController@student_login_dashboard',
  'as' => 'student_dashboard'
]);

#admin login
Route::post('/adminlogin',[
  'uses' => 'AdminController@login_dashboard',
  'as' => 'adminlogin'
]);

Route::post('/studentlogin',[
  'uses' => 'AdminController@student_dashboard',
  'as' => 'studentlogin'
]);

Route::get('/view',[
  'uses' => 'AdminController@viewprofile',
  'as' => 'view'
]);

#admin setting
Route::get('/settings',[
  'uses' => 'AdminController@settings',
  'as' => 'settings'
]);

#student setting
Route::get('/student_settings',[
  'uses' => 'AddstudentsController@student_settings',
  'as' => 'student_settings'
]);

#student setting
Route::get('/student_profile',[
  'uses' => 'AddstudentsController@student_profile',
  'as' => 'student_profile'
]);

Route::get('/admin_dashboard',[
  'uses' => 'AdminController@admin_dashboard',
  'as' => 'admin_dashboard'
]);

#admin logout
Route::get('/logout',[
  'uses' => 'AdminController@logout',
  'as' => 'logout'
]);

#student logout
Route::get('/student_logout',[
  'uses' => 'AddstudentsController@student_logout',
  'as' => 'student_logout'
]);

#student
Route::get('/addstudent',[
  'uses' => 'AddstudentsController@addstudent',
  'as' => 'addstudent'
]);

Route::post('/savestudent',[
  'uses' => 'AddstudentsController@savestudent',
  'as' => 'savestudent'
]);

Route::get('/deletestudent/{student_id}',[
  'uses' => 'allstudentsController@deletestudent',
  'as' => 'studentdelete'
]);

Route::get('/viewstudent/{student_id}',[
  'uses' => 'allstudentsController@viewstudent',
  'as' => 'studentview'
]);

Route::get('/editstudent/{student_id}',[
  'uses' => 'allstudentsController@editstudent',
  'as' => 'studentedit'
]);

Route::post('/update_student/{student_id}',[
  'uses' => 'allstudentsController@updatestudent',
  'as' => 'studentupdate'
]);

Route::get('/allstudent',[
  'uses' => 'AllstudentsController@allstudent',
  'as' => 'allstudent'
]);

Route::get('/tuitionfee',[
  'uses' => 'TuitionController@tuitionfee',
  'as' => 'tuitionfee'
]);

#courses
Route::get('/cse',[
  'uses' => 'CSEController@cse',
  'as' => 'cse'
]);

Route::get('/eee',[
  'uses' => 'EEEController@eee',
  'as' => 'eee'
]);

Route::get('/mec',[
  'uses' => 'MECController@mec',
  'as' => 'mec'
]);

Route::get('/mba',[
  'uses' => 'MBAController@mba',
  'as' => 'mba'
]);

Route::get('/pec',[
  'uses' => 'PECController@pec',
  'as' => 'pec'
]);

Route::get('/allteacher',[
  'uses' => 'TeacherController@allteacher',
  'as' => 'allteacher'
]);

Route::get('/addteacher',[
  'uses' => 'TeacherController@addteacher',
  'as' => 'addteacher'
]);

Route::post('/saveteacher',[
  'uses' => 'TeacherController@saveteacher',
  'as' => 'saveteacher'
]);
