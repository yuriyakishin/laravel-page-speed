<?php

declare(strict_types=1);

namespace Yu\PageSpeed;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Yu\PageSpeed\Livewire\PageSpeedComponent;

class PageSpeedServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/page-speed.php', 'page-speed');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'page-speed');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'page-speed');

        // The name is required: without it Livewire 4 makes up a hash and <livewire:page-speed /> is not found
        Livewire::component('page-speed', PageSpeedComponent::class);
    }
}
