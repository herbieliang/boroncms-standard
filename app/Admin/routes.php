<?php
use Dcat\Admin\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
        'prefix' => config('admin.route.prefix'),
        'namespace' => config('admin.route.namespace'),
        'middleware' => config('admin.route.middleware')
], function (Router $router) {
    $router->get('/', 'HomeController@index');

    $router->get('/setting', 'SettingController@setting');

    // 幻灯分类
    $router->resource('slide-category', "SlideCategoryController");

    // 幻灯
    $router->resource('slide', 'SlideController');
});
