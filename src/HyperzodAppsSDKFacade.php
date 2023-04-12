<?php

namespace Hyperzod\HyperzodAppsSDK;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hyperzod\HyperzodAppsSDK\Skeleton\SkeletonClass
 */
class HyperzodAppsSDKFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hyperzod apps sdk';
    }
}
