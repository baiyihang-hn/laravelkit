<?php

namespace Byh\LaravelKit;

use Illuminate\Support\ServiceProvider;

class ApiResponseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //单例服务
        $this->app->singleton('apiResponse', function ($app) {
            return new ApiResponse($app['config']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            //发布result配置文件
            __DIR__ . '/config/apiresponse.php' => config_path('apiresponse.php')
        ], 'apiresponse');
    }
}
