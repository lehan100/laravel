<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

$prefixAdmin = Config::get('configs.prefix_admin', 'admin');
$prefix = 'category';
$controllerName = "category";
$namespace = sprintf('App\Modules\%s\Controllers',ucfirst($controllerName));

Route::group(['prefix' => $prefixAdmin, 'module' => ucfirst($controllerName), 'namespace' => $namespace], function () use ($controllerName,$prefix) {

    Route::group(['prefix' => $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('', ['as' => $controllerName, 'uses' => $controller . 'index']);
    });
});
