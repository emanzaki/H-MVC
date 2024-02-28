<?php

namespace Customers\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;
class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $moduleName='customers';
        $ds= DIRECTORY_SEPARATOR;
        config([$moduleName => File::getRequire(__DIR__ . $ds . '..' . $ds . 'config' . $ds . 'route.php')]);
        $this->loadRoutesFrom(__DIR__.$ds.'..'.$ds.'routes'.$ds.'web.php');
        $this->loadViewsFrom(__DIR__ . $ds . '..' . $ds . 'resources' . $ds . 'views', $moduleName);
    }
}
