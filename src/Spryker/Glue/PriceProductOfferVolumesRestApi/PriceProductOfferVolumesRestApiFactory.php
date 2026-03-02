<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\PriceProductOfferVolumesRestApi;

use Spryker\Glue\Kernel\AbstractFactory;
use Spryker\Glue\PriceProductOfferVolumesRestApi\Dependency\Service\PriceProductOfferVolumesRestApiToUtilEncodingServiceInterface;
use Spryker\Glue\PriceProductOfferVolumesRestApi\Processor\Mapper\RestProductOfferPricesAttributesMapper;
use Spryker\Glue\PriceProductOfferVolumesRestApi\Processor\Mapper\RestProductOfferPricesAttributesMapperInterface;

class PriceProductOfferVolumesRestApiFactory extends AbstractFactory
{
    public function createRestProductOfferPricesAttributesMapper(): RestProductOfferPricesAttributesMapperInterface
    {
        return new RestProductOfferPricesAttributesMapper(
            $this->getUtilEncodingService(),
        );
    }

    public function getUtilEncodingService(): PriceProductOfferVolumesRestApiToUtilEncodingServiceInterface
    {
        return $this->getProvidedDependency(PriceProductOfferVolumesRestApiDependencyProvider::SERVICE_UTIL_ENCODING);
    }
}
