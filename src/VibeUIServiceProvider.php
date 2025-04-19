<?php

namespace VibeUI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class VibeUIServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any services or bindings if needed
    }

    public function boot()
    {
        // Load the views (components)
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'vibeui');

        // Register the Blade component with the tag <vibe-button>
        Blade::component('vibe-button', \VibeUI\Components\Button::class);
    }
}

