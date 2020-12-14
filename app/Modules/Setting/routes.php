<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

$prefixAdmin = Config::get('configs.prefix_admin', 'admin');
$prefix = 'setting';
$controllerName = "setting";
$namespace = sprintf('App\Modules\%s\Controllers',ucfirst($controllerName));

Route::group(['prefix' => $prefixAdmin, 'module' => ucfirst($controllerName), 'namespace' => $namespace,'middleware'=>['admin.setting']], function () use ($controllerName,$prefix) {
    // Language
    $controllerName = "language";
    Route::group(['prefix' => $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/'.$controllerName, ['as' => $controllerName, 'uses' => $controller . 'index']);
    });
});
