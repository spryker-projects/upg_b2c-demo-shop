<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\OrdersRestApi;

use Spryker\Glue\OrdersRestApi\OrdersRestApiDependencyProvider as SprykerOrdersRestApiDependencyProvider;
use Spryker\Glue\ProductBundlesRestApi\Plugin\OrdersRestApi\BundleItemRestOrderDetailsAttributesMapperPlugin;
use Spryker\Glue\ProductOptionsRestApi\Plugin\OrdersRestApi\ProductOptionRestOrderItemsAttributesMapperPlugin;
use Spryker\Glue\ShipmentsRestApi\Plugin\OrdersRestApi\ShipmentRestOrderDetailsAttributesMapperPlugin;

class OrdersRestApiDependencyProvider extends SprykerOrdersRestApiDependencyProvider
{
    /**
     * @return \Spryker\Glue\OrdersRestApiExtension\Dependency\Plugin\RestOrderItemsAttributesMapperPluginInterface[]
     */
    protected function getRestOrderItemsAttributesMapperPlugins(): array
    {
        return [
            new ProductOptionRestOrderItemsAttributesMapperPlugin(),
        ];
    }

    /**
     * @return \Spryker\Glue\OrdersRestApiExtension\Dependency\Plugin\RestOrderDetailsAttributesMapperPluginInterface[]
     */
    protected function getRestOrderDetailsAttributesMapperPlugins(): array
    {
        return [
            new BundleItemRestOrderDetailsAttributesMapperPlugin(),
            new ShipmentRestOrderDetailsAttributesMapperPlugin(),
        ];
    }
}
