<?php

namespace Bu4ak\Promocode;

use Illuminate\Support\ServiceProvider;

/**
 * Class PromocodeServiceProvider.
 */
class PromocodeServiceProvider extends ServiceProvider
{
    /**
     * load migrations.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/');
    }
}
