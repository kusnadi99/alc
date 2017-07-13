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

//DocumentViewer Library
Route::any('ViewerJS/{all?}', function(){

    return View::make('ViewerJS.index');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('module', 'ModuleController');

Route::resource('training', 'TrainingController');

Route::resource('job-family', 'JobFamilyController');

Route::resource('department', 'DepartmentController');

Route::resource('berita', 'BeritaController');

Route::resource('slider', 'ContentSliderController');

Route::resource('section-training', 'SectionTrainingController');

Route::resource('jawaban', 'JawabanTraineeController');

Route::resource('personnel', 'PersonnelController');


Route::get('Trainning', function () {
    return view('IModul');
});


Route::get('Modul', function () {
    return view('module');
});

Route::get('Pre-Test', function () {
    return view('PreTest');
});

Route::get('EditPreTest', function () {
    return view('Admin.EditPreTest');
});

Route::resource('content-learning', 'ContentLearningController');



Route::get('UserList', function () {
    return view('Admin(new).UserList');
});


Route::get('Employee', function () {
    return view('Admin.EmployeeList');
});


Route::get('Tests', function () {
    return view('Quiz');
});


Route::get('AdminHome', function () {
    return view('Admin.Dashboard');
});

Route::get('/CreateDepartement', function () {
    return view('Admin.CreateDept');
});

Route::get('Materi', function () {
    return view('Materi');
});

Route::get('AddUser', function () {
    return view('Admin.AddUser');
});

Route::get('UserInfo', function () {
    return view('Admin.UserInfo');
});

Route::get('TrainningInfo', function () {
    return view('Admin.TrainningInfo');
});


Route::get('CreateTrainning', function () {
    return view('Admin.CreateTrainning');
});


Route::get('EditProfile', function () {
    return view('Admin.EditProfile');
});

Route::get('UserList', function () {
    return view('Admin.UserList');
});



Route::get('CreateNews', function () {
    return view('Admin.CreateNews');
});

Route::get('ListTrainning', function () {
    return view('Admin.ListTrainning');
});


Route::get('lol', function () {
    return view('Admin(New).admintemplate');
});


Route::get('QuestionList', function () {
    return view('Admin.QuestionList');
});


