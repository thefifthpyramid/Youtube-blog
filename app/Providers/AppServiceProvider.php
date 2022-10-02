<?php

namespace App\Providers;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Route;
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
        $settings = Setting::checkSettings();
        view()->share([
            'setting' => $settings
        ]);
    }
}
