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

// Route::get('/', function () {
//     return redirect('/index');
// });

Route::get('/', 'QovexController@logout');
// Route::get('/Web-login', 'Website\MainController@login');
// Route::get('/Web-register', 'Website\MainController@register');
// Route::post('/Register-submit', 'Website\MainController@register_submit');
// Route::post('/Login-submit', 'Website\MainController@login_submit');

/*   Student login Registration      */
// Route::get('/Student-login', 'Student\StudentController@index');
Route::get('/Student-register', 'Student\StudentController@register');

Route::middleware(['auth','User'])->group(function() {
    // Route::get('/', 'Student\StudentController@index');
    Route::get('studentdashboard', 'Student\StudentController@index')->name('student');
    Route::get('resume-page-one', 'Student\StudentController@resume_page_one');
    Route::get('resume-page-two', 'Student\StudentController@resume_page_two');
    Route::get('resume-training-Info', 'Student\StudentController@resume_trainingInfo');

    Route::post('profile-pic-submit', 'Student\StudentController@profile_pic_submit');

    Route::get('edit-password', 'Student\ProfileController@edit_password');
    Route::post('update-password', 'Student\ProfileController@update_password');
    
    Route::get('View-All-Test', 'Student\StudentController@View_all_Test');
    Route::get('Test', 'Student\StudentController@Test_Start');
    Route::get('Delete-Intship/{Int_id}','Student\StudentController@Delete_Intership');
    Route::get('Delete-Project/{proj_id}','Student\StudentController@Delete_project');
    Route::get('Delete_Certificate/{certi_id}','Student\StudentController@Delete_Certificate');
    Route::get('E-Learn/{section_id}','Student\StudentController@E_Learn');
    Route::get('learing_video','Student\StudentController@learing_video_section');
    Route::get('pagination/fetch_data/{section_id}', 'Student\StudentController@fetch_section_question');
    Route::get('All-Result', 'Student\StudentController@All_Result');
// ===========================================================
    // Route::get('demo12', 'Student\StudentController@demo12');
    // ============================================================
    Route::get('Compiler','Student\StudentController@View_Compiler');

    Route::get('Test-Result', 'Student\StudentController@Test_Result');
    Route::get('Start-Test-Demo/{test_id}', 'Student\StudentController@Start_Test');
    Route::post('Test-Instraction', 'Student\StudentController@Test_Instraction');
    Route::post('Get-TestQ', 'Student\StudentController@Get_TestQ');

    Route::post('question-option', 'Student\StudentController@question_option');
    Route::post('QuestionOn-Section', 'Student\StudentController@QuestionOnSection');
    Route::post('get-result', 'Student\StudentController@get_result');
   // Route::get('pagination/fetch_data', 'Student\StudentController@fetch_section_question');

    Route::post('QTest-Case','Student\StudentController@QTest_Case');

    // Route::post('Start-Test', 'Student\StudentController@Start_Test');
    

    Route::post('Basic-Info', 'Student\StudentController@submit_BasicInfo');
    Route::post('Academics-Info', 'Student\StudentController@submit_AcademicsInfo');
    Route::post('Training-Info', 'Student\StudentController@submit_TrainingInfo');
    Route::post('user-submit-test', 'Student\StudentController@Submit_test');

    Route::post('get-video-link', 'Student\StudentController@get_video_link');

    Route::post('save-student-program', 'Student\StudentController@save_student_program');
    Route::post('testCase-Result', 'Student\StudentController@testCase_Result');

});

Auth::routes();
Route::get('logout', 'QovexController@logout');

Route::get('pages-login', 'QovexController@index');
Route::get('pages-login-2', 'QovexController@index');
Route::get('pages-register', 'QovexController@index');
Route::get('pages-register-2', 'QovexController@index');
Route::get('pages-recoverpw', 'QovexController@index');
Route::get('pages-recoverpw-2', 'QovexController@index');
Route::get('pages-lock-screen', 'QovexController@index');
Route::get('pages-lock-screen-2', 'QovexController@index');
Route::get('pages-404', 'QovexController@index');
Route::get('pages-500', 'QovexController@index');
Route::get('pages-maintenance', 'QovexController@index');
Route::get('pages-comingsoon', 'QovexController@index');
Route::post('login-status', 'QovexController@checkStatus');
// Route::get('admin-list', 'AdminController@admin_list');
// Route::get('user-list', 'AdminController@user_list');
Route::get('categories-list', 'AdminController@categories_list');
Route::get('edit-categories/{id}', 'AdminController@editcategories');
Route::get('add-categories', 'AdminController@addcategories');
Route::post('categories-submit', 'AdminController@categoriesSubmit');
// Route::get('{any}', 'QovexController@index');




// You can also use auth middleware to prevent unauthenticated users
Route::group(['middleware' => 'auth'], function () {
    // Route::get('/home', 'HomeController@index')->name('home');
    
});

Route::middleware(['auth', 'Admin'])->group(function () {
    Route::get('admin', 'AdminController@admin_list')->name('Admin');
    Route::get('admin-list', 'AdminController@admin_list');
    Route::get('user-list', 'AdminController@user_list');
    Route::get('status-student/{id}/{status}', 'AdminController@status_student');

    Route::get('/home', 'HomeController@index')->name('home'); 

    Route::get('view-standard', 'AdminController@view_standard');
    Route::get('add-standard', 'AdminController@add_standard');
    Route::post('submit-standard', 'AdminController@submit_standard');
    Route::get('edit-standard/{id}', 'AdminController@edit_standard');
    Route::get('delete-standard/{id}', 'AdminController@delete_standard');


    Route::get('view-semister', 'AdminController@view_semister');
    Route::get('add-semister', 'AdminController@add_semister');
    Route::post('submit-semister', 'AdminController@submit_semister');
    Route::get('edit-semister/{id}', 'AdminController@edit_semister');
    Route::get('delete-semister/{id}', 'AdminController@delete_semister');


    Route::get('view-subject', 'AdminController@view_subject');
    Route::get('add-subject', 'AdminController@add_subject');
    Route::post('submit-subject', 'AdminController@submit_subject');
    Route::get('edit-subject/{id}', 'AdminController@edit_subject');
    Route::get('delete-subject/{id}', 'AdminController@delete_subject');

    Route::get('view-chapter', 'AdminController@view_chapter');
    Route::get('add-chapter', 'AdminController@add_chapter');
    Route::post('submit-chapter', 'AdminController@submit_chapter');
    Route::get('edit-chapter/{id}', 'AdminController@edit_chapter');
    Route::get('delete-chapter/{id}', 'AdminController@delete_chapter');

    Route::get('view-college', 'AdminController@view_college');
    Route::get('add-college', 'AdminController@add_college');
    Route::post('submit-college', 'AdminController@submit_college');
    Route::get('edit-college/{id}', 'AdminController@edit_college');
    Route::get('delete-college/{id}', 'AdminController@delete_college');

    Route::get('view-course', 'AdminController@view_course');
    Route::get('add-course', 'AdminController@add_course');
    Route::post('submit-course', 'AdminController@submit_course');
    Route::get('edit-course/{id}', 'AdminController@edit_course');
    Route::get('delete-course/{id}', 'AdminController@delete_course');


    Route::get('view-branch', 'AdminController@view_branch');
    Route::get('add-branch', 'AdminController@add_branch');
    Route::post('submit-branch', 'AdminController@submit_branch');
    Route::get('edit-branch/{id}', 'AdminController@edit_branch');
    Route::get('delete-branch/{id}', 'AdminController@delete_branch');


    Route::get('view-test-type', 'AdminController@view_test_type');
    Route::get('add-test-type', 'AdminController@add_test_type');
    Route::post('submit-test-type', 'AdminController@submit_test_type');
    Route::get('edit-test-type/{id}', 'AdminController@edit_test_type');
    Route::get('delete-test-type/{id}', 'AdminController@delete_test_type');

    Route::post('importuser', 'AdminController@import')->name('importuser');
    Route::get('importExportView', 'AdminController@importExportView');
    Route::get('export', 'AdminController@export')->name('export');
    Route::get('questionexport', 'AdminController@questionexport')->name('questionexport');
    Route::post('export_test_report', 'AdminController@export_test_report')->name('export_test_report');
    Route::get('view-test-result', 'AdminController@view_test_result');



    // Question pages  Start

    Route::get('view-question', 'QuestionController@question_list');
    Route::get('add-question', 'QuestionController@add_question');
    Route::post('submit-question', 'QuestionController@submit_question');
    Route::get('edit-question/{id}', 'QuestionController@edit_question');
    Route::get('delete-question/{id}', 'QuestionController@delete_question');

    Route::get('delete-question-image/{id}','QuestionController@delete_question_image');


    Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'QuestionController@myformAjax'));

    Route::get('add-answer/{id}', 'QuestionController@add_answer');
    Route::post('submit-answer', 'QuestionController@submit_answer');

    Route::get('edit-answer/{id}', 'QuestionController@edit_answer');

    Route::get('add-test-case/{id}', 'QuestionController@add_test_case');
    Route::post('submit-test-case', 'QuestionController@submit_test_case');

    Route::get('view-test', 'QuestionController@test_list');
    Route::get('add-test', 'QuestionController@add_test');
    Route::post('submit-test', 'QuestionController@submit_test');
    Route::get('add-test-two/{id}', 'QuestionController@add_test_two');
    Route::post('submit-test-two', 'QuestionController@submit_test_two');
    Route::get('edit-test/{id}', 'QuestionController@edit_test');
    Route::get('delete-test/{id}/{status}', 'QuestionController@delete_test');
    Route::get('delete-this-test/{id}', 'QuestionController@delete_this_test');

    Route::get('edit-test-two/{id}', 'QuestionController@edit_test_two');
    Route::post('submit-test-two-edit', 'QuestionController@submit_test_two_edit');

    Route::post('get_chapter', 'QuestionController@get_chapter');

    Route::get('manage-test-question', 'QuestionController@add_test_question');
    Route::post('save-test-question', 'QuestionController@save_test_question');
    Route::post('get-test-question', 'QuestionController@get_test_question');
    Route::post('find-test-question', 'QuestionController@get_test_question');
    Route::post('save-test-question', 'QuestionController@save_test_question');

    Route::get('view-test-question', 'QuestionController@view_test_question');
    Route::post('view-test-question', 'QuestionController@view_test_question1');


    
    
    Route::get('view-test-name', 'AdminController@view_test_name');
    Route::get('view-question-level', 'AdminController@view_question_level');

    
    Route::get('view-test-section', 'AdminController@view_test_section');
    Route::get('add-test-section', 'AdminController@add_test_section');
    Route::post('submit-test-section', 'AdminController@submit_test_section');
    Route::get('edit-test-section/{id}', 'AdminController@edit_test_section');
    Route::get('delete-test-section/{id}', 'AdminController@delete_test_section');

    Route::get('view-program-name', 'AdminController@view_program_name');

    Route::get('view-material', 'MaterialController@view_material');
    Route::get('add-material', 'MaterialController@add_material');
    Route::post('submit-material', 'MaterialController@submit_material');
    Route::get('edit-material/{id}', 'MaterialController@edit_material');
    Route::get('delete-material/{id}', 'MaterialController@delete_material');

    Route::get('{any}', 'QovexController@index');
 
});


