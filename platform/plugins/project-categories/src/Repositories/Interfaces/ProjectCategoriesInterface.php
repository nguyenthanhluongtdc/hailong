<?php

namespace Platform\ProjectCategories\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface ProjectCategoriesInterface extends RepositoryInterface
{
    public function getByCategory($categoryId, $paginate = 12, $limit = 0);
}
