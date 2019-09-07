<?php

namespace vsysio\laravel_kik_api;

use Illuminate\Support\ServiceProvider;

class KikServiceProvider extends ServiceProvider {

    public function boot() {

        $this->publishes([
            __DIR__.'Config.php' => config_path('kik.php')
        ]);

    }

}