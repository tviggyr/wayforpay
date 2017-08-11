<?php

namespace Zogxray\Wayforpay;

use Illuminate\Support\Facades\Facade;

/**
 * Class WayForPayFacade
 */
class WayForPayFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'wayforpay';
    }
}