<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\TaxProductConnector;

use Spryker\Zed\TaxProductConnector\TaxProductConnectorDependencyProvider as SprykerTaxProductConnectorDependencyProvider;

class TaxProductConnectorDependencyProvider extends SprykerTaxProductConnectorDependencyProvider
{
    /**
     * @return array
     */
    public function getShippingAddressValidatorPlugins() : array
    {
        return [
            new Spryker\Zed\Customer\Communication\Plugin\TaxProductConnector\CustomerAddressShippingAddressValidatorPlugin(),
        ];
    }
}