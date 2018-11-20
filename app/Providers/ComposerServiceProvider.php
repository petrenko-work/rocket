<?php

namespace App\Providers;

use App\Settings;
use Illuminate\Foundation\Console\Presets\None;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        try {
            $settings = Settings::first();
        } catch (\Exception $e) {
            $settings = null;
        }

        View::composer(['index', 'layouts.footer'], function ($view) use ($settings) {
            $view->with('settings', $settings);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}