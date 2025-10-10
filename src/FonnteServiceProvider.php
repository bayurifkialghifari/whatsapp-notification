<?php

namespace Bayurifkialghifari\WhatsApp;

use Illuminate\Support\ServiceProvider;

class FonnteServiceProvider extends ServiceProvider {
    public function register() {
        $this->mergeConfigFrom(
            __DIR__.'/../config/fonnte.php', 'fonnte'
        );
    }

    public function boot() {
        $this->publishes([
            __DIR__.'/../config/fonnte.php' => config_path('fonnte.php'),
        ]);
    }
}
