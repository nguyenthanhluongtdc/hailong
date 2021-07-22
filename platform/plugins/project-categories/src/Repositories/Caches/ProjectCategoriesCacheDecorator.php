<?php

namespace Platform\ProjectCategories\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\ProjectCategories\Repositories\Interfaces\ProjectCategoriesInterface;

class ProjectCategoriesCacheDecorator extends CacheAbstractDecorator implements ProjectCategoriesInterface
{
/**
     * {@inheritDoc}
     */
    public function getByCategory($categoryId, $paginate = 12, $limit = 0)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
