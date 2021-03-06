<?php

/**
 * @package    Grav\Common\Service
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Service;

use Grav\Common\Inflector;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class InflectorServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['inflector'] = function () {
            return new Inflector();
        };
    }
}
