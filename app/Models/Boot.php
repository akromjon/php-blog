<?php

namespace App\Models;

use Illuminate\Support\Facades\Artisan;

trait Boot
{
    public static function boot()
    {
        parent::boot();

        static::created(function ($item) {
            Artisan::call('cache:clear');
        });

        static::updated(function ($item) {
            Artisan::call('cache:clear');
        });

        static::deleted(function ($item) {
            Artisan::call('cache:clear');
        });
    }
}
