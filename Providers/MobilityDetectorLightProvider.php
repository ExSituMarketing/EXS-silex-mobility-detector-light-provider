<?php

namespace EXS\MobilityDetectorLightProvider\Providers;

use Pimple\ServiceProviderInterface;
use Pimple\Container;

/**
 * Service to detect mobile device
 *
 * Created 1-May-2015
 * @author JY Lee<lee@ex-situ.com>
 * @copyright   Copyright 2015 ExSitu Marketing.
 */
class MobilityDetectorLightProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['exs.serv.mobility.detector.light'] = ( function ($container) {
            return new \EXS\MobilityDetectorLightProvider\Services\MobilityDetectorLightService();
        });
    }
}