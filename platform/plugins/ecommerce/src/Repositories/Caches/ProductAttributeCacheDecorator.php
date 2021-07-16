<?php

namespace Platform\Ecommerce\Repositories\Caches;

use Platform\Ecommerce\Repositories\Interfaces\ProductAttributeInterface;
use Platform\Support\Repositories\Caches\CacheAbstractDecorator;

class ProductAttributeCacheDecorator extends CacheAbstractDecorator implements ProductAttributeInterface
{
}
