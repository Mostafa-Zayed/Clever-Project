<?php

Route::prefix('dashboard')->name('dashboard.')->group(function(){

    Route::get('/index','Home@index')->name('index');
    Route::resource('users','Users')->except(['show']);
    Route::resource('categories','Categories')->except(['show']);
    Route::resource('courses','Courses');
    Route::resource('skills','Skills')->except(['show']);
    Route::resource('tages','Tages')->except(['show']);
    Route::resource('pages','Pages')->except(['show']);
    Route::resource('videos','Videos');
    Route::resource('programes','Programes');
    Route::resource('instructors','Instructors');
    Route::resource('faqs','Faqs');
    Route::resource('scholarships','Scholarships');
    Route::resource('certifications','Certifications');
    Route::resource('types','Types');
    Route::resource('events','Events');
    Route::resource('curriculumes','Curriculumes');
    Route::resource('programtypes','ProgramsTypes');
    
    Route::post('comments','Videos@commentStore')->name('comments.store');
    Route::get('comments/{id}','Videos@commentDelete')->name('comment.delete');
});