<?php
Route::get('/','Frontend\index@index')->name('index');
/*Navbar*/
Route::get('/home','Frontend\home@showHome')->name('homepage');

// Route::get('/category','Frontend\show_catagory@showCategory')->name('categoryPage');
Route::get('/frontEmployer','Frontend\employer@showFrontEmployer')->name('frontEmployer');
Route::get('/contact','Frontend\contact@showContact')->name('contactPage');
/*UserRegister form*/
Route::get('/registration','Frontend\registration@showRegistration')->name('registration');
Route::post('/registration','Frontend\registration@showProcessReg')->name('registrationProcess');
/*User Log In form*/
 Route::get('/login','Frontend\login@showLogin')->name('login');
 Route::post('/login','Frontend\login@showProcessLogin')->name('loginProcess');
 Route::get('/logout','Frontend\login@showLogOut')->name('showLogOut');
/* Company Registration Form*/
Route::get('/companyRegistration','Frontend\company_registration@showCompanyRegistration')->name('companyReg');
Route::post('/companyRegistration','Frontend\company_registration@showProcessCompanyReg')->name('companyRegProcess');
/*show Company Log In form*/
Route::get('/comLogin','Frontend\companylogin@comLogin')->name('comLogin');
Route::post('/comLogin','Frontend\companylogin@processComLogin')->name('comloginProcess');
/*Employers Catagory*/
Route::get('/catagory','Frontend\employer_catagory@showEmployerCategory')->name('employerCategory');
Route::get('/catagoryview','Frontend\employer_catagory@showEmpCategoryView')->name('emcategoryView');

/*Jobseeker registration*/
/*Backend*/
Route::get('/dashboard','Backend\ShowDashboard@showDashboard')->name('dashboard');

/*jobseeker registration*/
Route::get('/jobseeker_reg','Frontend\jobseeker_reg@showJobseekerReg')->name('jobseekerReg');
Route::post('/jobseeker_reg','Frontend\jobseeker_reg@processJobseekerReg')->name('processjobseekerReg');
Route::get('/jobseeker_log','Frontend\jobseeker_log@showLogin')->name('jobseekerLog');
Route::post('/jobseeker_log','Frontend\jobseeker_log@processLogin')->name('processJobseekerlogin');
/*Job Post*/
Route::get('/company','Backend\Company@showComProfile')->name('ComProfile');
Route::get('/post_job','Backend\PostJobController@showPostJob')->name('postJob');
Route::post('/post_job','Backend\PostJobController@processPostJob')->name('postJobProcess');
/*company edit*/
Route::get('/job/edit/{id}','Backend\PostJobController@showeditJob')->name('editJob');
Route::post('/job/update/{id}','Backend\PostJobController@processJobEdit')->name('processJobEdit');
/*Category*/
Route::get('/job_category','Backend\CategoryController@showCategory')->name('showCategory');
Route::post('/job_category','Backend\CategoryController@processCategory')->name('processCategory');

/*Resume show and process*/
Route::get('/jobseeker','Backend\ResumeController@showResume')->name('showResume');
Route::post('/jobseeker','Backend\ResumeController@processResume')->name('processResume');
/* Resume view kora*/
Route::get('/resume/view/{id}','Backend\ResumeController@viewResume')->name('viewResume');
// Route::post('/resume/view/process/{id}','Backend\ResumeController@processViewResume')->name('processViewResume');
/*Resume Edit */
Route::get('/resume/edit/{id}','Backend\ResumeController@editResume')->name('editResume');
Route::post('/resume/update/{id}','Backend\ResumeController@processEditResume')->name('processEditResume');

/* Job view*/
Route::get('/job/view/{id}','Backend\PostJobController@viewJob')->name('viewJob');


Route::get('/createEmployer','Backend\Company@showCreateEmployer')->name('createEmployer');
Route::post('/employerPost','Backend\Company@showEmployerPost')->name('employerPost');
Route::post('/postEmployer','Backend\Company@showEmployerPost')->name('postEmployee');

/*admin*/
Route::get('/admin/approve_job','Backend\AdminController@approveJoblist')->name('approveJoblist');
Route::get('/admin/rejectResume','Backend\AdminController@rejectJoblist')->name('rejectJoblist');


Route::get('/admin/approve/{id}','Backend\AdminController@approveJob')->name('approveJob');
Route::get('/admin/reject/{id}','Backend\AdminController@rejectJob')->name('rejectJob');
