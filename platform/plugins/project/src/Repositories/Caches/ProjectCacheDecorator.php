<?php

namespace Platform\Project\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\Project\Repositories\Interfaces\ProjectInterface;

class ProjectCacheDecorator extends CacheAbstractDecorator implements ProjectInterface
{
    /**
     * {@inheritDoc}
     */
    public function getByCategory($categoryId, $paginate = 12, $limit = 0)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
