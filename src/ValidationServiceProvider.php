<?php

namespace pebibits\validation;
use Illuminate\Support\ServiceProvider;


class ValidationServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views','validation');

    }

    public function register()
    {

    }
} 