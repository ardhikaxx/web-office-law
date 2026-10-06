<?php

namespace App\Providers;

use App\Support\LawFirm;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::share('site', LawFirm::site());
        View::share('whatsappUrl', LawFirm::whatsappUrl());
    }
}
