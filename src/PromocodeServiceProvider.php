<?php

namespace Bu4ak\Promocode;

use Illuminate\Support\ServiceProvider;

/**
 * Class InvitedUserServiceProvider
 * @package InvitedUser
 */
class PromocodeServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations'),
        ], 'migrations');
    }

    /**
     *
     */
    public function register()
    {
    }
}
