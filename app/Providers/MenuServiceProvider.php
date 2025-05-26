<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Composers\MenuComposer;

class MenuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('frontend.layouts.header-menu', MenuComposer::class);
    }

    public function register()
    {
        //
    }
}
