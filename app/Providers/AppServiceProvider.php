<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\Blade::directive('editableSetting', function($expression){
            list($key, $default) = explode(',', $expression);
            return \Illuminate\Support\Facades\Blade::compileString("@livewire('setting.edit',['key' => {$key}, 'default' => {$default} ])");
        });
    }
}
