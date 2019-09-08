<?php

namespace vsysio\laravel_kik_api;

use Illuminate\Support\ServiceProvider;

class KikServiceProvider extends ServiceProvider {

    public function boot() {

        $this->publishes([
            __DIR__.'Config.php' => config_path('\kik.php')
        ]);

    }

    public function register() {

        $this->app->singleton('\vsysio\laravel_kik_api\Interfaces\API', function ($app) {
           return new \vsysio\laravel_kik_api\Interfaces\API();
        });

    }

}