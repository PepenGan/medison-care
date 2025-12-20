<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Tempat bind singleton / interface -> implementation (kalau perlu).
    }

    public function boot(): void
    {
        // Tempat config global setelah semua provider siap (kalau perlu).
    }
}
