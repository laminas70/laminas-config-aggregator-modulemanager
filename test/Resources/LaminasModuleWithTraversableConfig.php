<?php

/**
 * @see       https://github.com/laminas/laminas-config-aggregator-modulemanager for the canonical source repository
 */

declare(strict_types=1);

namespace LaminasTest\ConfigAggregatorModuleManager\Resources;

use ArrayObject;

class LaminasModuleWithTraversableConfig
{
    use ServiceManagerConfigurationTrait;

    /**
     * @return ArrayObject
     */
    public function getConfig()
    {
        return new ArrayObject([
            'service_manager' => $this->createServiceManagerConfiguration(),
        ]);
    }
}
