<?php

namespace YourVendor\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(MyPackage::class, function () {
            return new MyPackage();
        });
    }

    public function boot()
    {
        // Publishing files, routes, views, etc.
    }
}
