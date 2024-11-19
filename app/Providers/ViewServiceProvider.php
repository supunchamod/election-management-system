<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\District;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function boot()
    {
        // Attach data to the header blade globally
        View::composer('layouts.header', function ($view) {
            $districts = District::with('divisions')->get();
            $view->with('districts', $districts);
        });
    }

    public function register()
    {
        //
    }
}
