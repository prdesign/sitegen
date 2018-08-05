<?php

Route::prefix('sitegen')->group( function(){

    $namespacePrefix = '\\'.config('sitegen.controllers.namespace').'\\';

    // Authentication routes

    Route::get('login' , function(){
        return view('sitegen::auth.login');
    })->name('sitegen.auth-login');

    // Dashboard Routes

    Route::get('/' , $namespacePrefix . 'SiteGenDashboardController@index')->name('sitegen.dashboard.index');

    // Users Routes - BREAD

    Route::get('users' , $namespacePrefix . 'SiteGenUserController@index')->name('sitegen.user.browse');
    Route::get('users/read/{id}' , $namespacePrefix . 'SiteGenUserController@show')->name('sitegen.user.read');
    Route::get('users/edit/{id}' , $namespacePrefix . 'SiteGenUserController@edit')->name('sitegen.user.edit');
    Route::get('users/add/{id}' , $namespacePrefix . 'SiteGenUserController@edit')->name('sitegen.user.add');
    Route::get('users/delete/{id}' , $namespacePrefix . 'SiteGenUserController@delete')->name('sitegen.user.delete');

    // Roles Routes - BREAD

    Route::get('roles' , $namespacePrefix . 'SiteGenRoleController@index')->name('sitegen.role.browse');
    Route::get('roles/read/{id}' , $namespacePrefix . 'SiteGenRoleController@show')->name('sitegen.role.read');
    Route::get('roles/edit/{id}' , $namespacePrefix . 'SiteGenRoleController@edit')->name('sitegen.role.edit');
    Route::get('roles/add/{id}' , $namespacePrefix . 'SiteGenRoleController@edit')->name('sitegen.role.add');
    Route::get('roles/delete/{id}' , $namespacePrefix . 'SiteGenRoleController@delete')->name('sitegen.role.delete');

    // Forms Routes - BREAD

    Route::get('forms' , $namespacePrefix . 'SiteGenFormController@index')->name('sitegen.form.browse');
    Route::get('forms/read/{id}' , $namespacePrefix . 'SiteGenFormController@show')->name('sitegen.form.read');
    Route::get('forms/edit/{id}' , $namespacePrefix . 'SiteGenFormController@edit')->name('sitegen.form.edit');
    Route::get('forms/add/{id}' , $namespacePrefix . 'SiteGenFormController@edit')->name('sitegen.form.add');
    Route::get('forms/delete/{id}' , $namespacePrefix . 'SiteGenFormController@delete')->name('sitegen.form.delete');

    // Form Builder Routes

    Route::get('formbuilder' , $namespacePrefix . 'SiteGenFormBuilderController@index')->name('sitegen.formbuilder.index');

    // Site Wizard Routes

    Route::get('wizard' , $namespacePrefix . 'SiteGenWizardController@index')->name('sitegen.wizard.index');

    // Site Page routes

    Route::get('pages' , $namespacePrefix . 'SiteGenPageController@browse')->name('sitegen.page.browse');
    Route::get('pages/read/{slug}' , $namespacePrefix . 'SiteGenPageController@read')->name('sitegen.page.read');
    Route::get('pages/edit/{slug}' , $namespacePrefix . 'SiteGenPageController@edit')->name('sitegen.page.edit');
    Route::get('pages/add/{slug}' , $namespacePrefix . 'SiteGenPageController@add')->name('sitegen.page.add');
    Route::get('pages/delete/{slug}' , $namespacePrefix . 'SiteGenPageController@delete')->name('sitegen.page.delete');

    // Site Settings Routes

    Route::get('settings' , $namespacePrefix . 'SiteGenSettingController@index')->name('sitegen.setting.browse');


});
