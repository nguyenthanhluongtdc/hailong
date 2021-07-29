<?php

namespace Platform\ProjectCategories\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface ProjectCategoriesInterface extends RepositoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function getAllCategory();
}
