<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public static function redirectTo()
    {
        $user = auth()->user();

        if ($user->level === 'admin') {
            return '/admin/home';
        }

        return '/warga/home';
    }
}
