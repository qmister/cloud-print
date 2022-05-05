<?php

namespace whereof\cloudPrint\Feieyun;

use whereof\cloudPrint\Kernel\ServiceContainer;


class AppContainer extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        ServiceProvider::class,
    ];
}
