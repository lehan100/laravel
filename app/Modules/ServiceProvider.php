<?php

namespace App\Modules;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\App;

class ServiceProvider extends  \Illuminate\Support\ServiceProvider{
    /**
     * Register config file here
     * alias => path
     */
    private $configFile = [
        'category' => 'Category/Configs/settings.php',
        'admin_config' => 'Configs/admin.php',
    ];

    /**
     * Register bindings in the container.
     */
    public function register()
    {
        $this->loadTranslationsFrom(__DIR__  . "/Languages", "lang");
        // register your config file here
        foreach ($this->configFile as $alias => $path) {
            $this->mergeConfigFrom(__DIR__ . "/" . $path, $alias);
        }
        // config(['translate' => [
        //     'timezone' => 'America/Chicago'
        // ]]);
        // config(['app.timezone' => 'America/Chicago']);
    }

    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $directories = array_map('basename', File::directories(__DIR__));

        foreach ($directories as $moduleName) {
            $this->_registerModule($moduleName);
        }
    }

    private function _registerModule($moduleName) {
        $modulePath = __DIR__ . "/$moduleName/";

        // boot route
        if (File::exists($modulePath . "routes.php")) {
            $this->loadRoutesFrom($modulePath . "routes.php");
        }

        // boot migration
        if (File::exists($modulePath . "Migrations")) {
            $this->loadMigrationsFrom($modulePath . "Migrations");
        }

        // boot languages
        if (File::exists($modulePath . "Languages")) {
            $this->loadTranslationsFrom($modulePath . "Languages", $moduleName);
        }

        // boot views
        if (File::exists($modulePath . "Views")) {
            $this->loadViewsFrom($modulePath . "Views", $moduleName);
        }
    }
}