<?php

namespace Platform\ProjectCategories\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\ProjectCategories\Repositories\Interfaces\ProjectCategoriesInterface;
use Platform\Base\Enums\BaseStatusEnum;

class ProjectCategoriesRepository extends RepositoriesAbstract implements ProjectCategoriesInterface
{
    public function getAllCategory() {
        $data = $this->model
                ->where('status', BaseStatusEnum::PUBLISHED)
                ->orderBy('created_at', 'DESC');

        return $this->applyBeforeExecuteQuery($data)->get();
    }
}
