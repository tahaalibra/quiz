<?php
use dales\routing\Routes;

Routes::set('/','SigninController@signin');
Routes::set('admin','AdminController@admin');
Routes::set('admin/add/{id}','AdminController@add');
Routes::set('admin/category/create','AdminController@newCategory');
Routes::set('admin/setting','AdminController@setting');
Routes::set('admin/reset','AdminController@reset');
Routes::set('admin/result','AdminController@result');
Routes::set('signin','SigninController@signin');
Routes::set('signout','SignoutController@signout');
Routes::set('signup','SignupController@signup');
Routes::set('home','HomeController@home');
Routes::set('test','TestController@test');
Routes::set('result','ResultController@result');
