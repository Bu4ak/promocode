<?php

namespace Bu4ak\Promocode;

use Illuminate\Support\ServiceProvider;


/**
 * Class PromocodeServiceProvider
 * @package Bu4ak\Promocode
 */
class PromocodeServiceProvider extends ServiceProvider
{
    /**
     * load migrations
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/');
    }
}
