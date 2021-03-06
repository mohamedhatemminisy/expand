<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


//note that the prefix is admin for all file route

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin', 'prefix' => 'admin'], function () {

        Route::get('/', 'DashboardController@index')->name('admin.dashboard');  // the first page admin visits if authenticated
        Route::get('logout', 'LoginController@logout')->name('admin.logout');
        Route::get('updateOrganization', 'SettingsController@updateOrganization')->name('updateOrganization');
        Route::post('store_settings', 'SettingsController@store_settings')->name('store_settings');
        Route::post('state', 'SettingsController@state')->name('state');
        Route::post('area', 'SettingsController@area')->name('area');

        Route::get('employee', 'EmployeeController@index')->name('employee');
        Route::post('store_employee', 'EmployeeController@store_employee')->name('store_employee');
        Route::get('emp_auto_complete', 'EmployeeController@emp_auto_complete')->name('emp_auto_complete');
        Route::get('emp_info', 'EmployeeController@emp_info')->name('emp_info');

        
        
        

        Route::get('department', 'DepartmentController@index')->name('department');
        Route::post('store_department', 'DepartmentController@store_department')->name('store_department');
        Route::post('depart_manger', 'DepartmentController@depart_manger')->name('depart_manger');
        Route::get('dept_auto_complete', 'DepartmentController@dept_auto_complete')->name('dept_auto_complete');
        Route::get('dep_info', 'DepartmentController@dep_info')->name('dep_info');

        
        Route::get('subscribers', 'SubscriberController@index')->name('subscribers');
        Route::post('store_subscriber', 'SubscriberController@store_subscriber')->name('store_subscriber');
        Route::get('subscribe_auto_complete', 'SubscriberController@subscribe_auto_complete')->name('subscribe_auto_complete');
        Route::get('subscribe_info', 'SubscriberController@subscribe_info')->name('subscribe_info');
        
        Route::get('projects', 'ProjectController@index')->name('projects');
        Route::post('store_project', 'ProjectController@store_project')->name('store_project');
        Route::post('depart_manger_project', 'ProjectController@depart_manger_project')->name('depart_manger_project');
        Route::get('project_auto_complete', 'ProjectController@project_auto_complete')->name('project_auto_complete');
        Route::get('project_info', 'ProjectController@project_info')->name('project_info');

        

        
        Route::get('enginering', 'orginzationsController@enginering')->name('enginering');
        Route::get('space', 'orginzationsController@space')->name('space');
        Route::get('banks', 'orginzationsController@banks')->name('banks');
        Route::get('suppliers', 'orginzationsController@suppliers')->name('suppliers');
        Route::get('orginzations', 'orginzationsController@index')->name('orginzations');
        Route::post('store_orginzation', 'orginzationsController@store_orginzation')->name('store_orginzation');
        Route::get('orginzation_auto_complete', 'orginzationsController@orginzation_auto_complete')
        ->name('orginzation_auto_complete');
        Route::get('orgnization_info', 'orginzationsController@orgnization_info')->name('orgnization_info');


        Route::get('dev_equp', 'AssetsController@dev_equp')->name('dev_equp');
        Route::get('vehicles', 'AssetsController@vehicles')->name('vehicles');
        Route::post('store_equpment', 'AssetsController@store_equpment')->name('store_equpment');
        Route::get('equip_auto_complete', 'AssetsController@equip_auto_complete')
        ->name('equip_auto_complete');
        Route::get('equip_info', 'AssetsController@equip_info')->name('equip_info');

        
  
        Route::get('buildings', 'SpecialAssetsController@buildings')->name('buildings');
        Route::get('Gardens_lands', 'SpecialAssetsController@Gardens_lands')->name('Gardens_lands');
        Route::get('warehouses', 'SpecialAssetsController@warehouses')->name('warehouses');
        
        

        Route::group(['prefix' => 'profile'], function () {
            Route::get('edit', 'ProfileController@editProfile')->name('edit.profile');
            Route::put('update', 'ProfileController@updateprofile')->name('update.profile');
        });


     

        /**
         * admins Routes
         */
        Route::group(['prefix' => 'users' , 'middleware' => 'can:users'], function () {
            Route::get('/', 'UsersController@index')->name('admin.users.index');
            Route::get('/create', 'UsersController@create')->name('admin.users.create');
            Route::post('/store', 'UsersController@store')->name('admin.users.store');
        });

    });

    Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function () {

        Route::get('login', 'LoginController@login')->name('admin.login');
        Route::post('login', 'LoginController@postLogin')->name('admin.post.login');

    });

});
