<?php

namespace App\Providers;

use App\Models\Conference;
use App\Policies\ConferencePolicy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        Conference::class => ConferencePolicy::class,
    ];

    public function register(): void
    {
    }

    public function boot(): void
    {
    }
}
