<?php

namespace Platform\Project\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\Project\Repositories\Interfaces\ProjectInterface;

class ProjectRepository extends RepositoriesAbstract implements ProjectInterface
{
    public function getByCategory($categoryId, $paginate = 12, $limit = 0)
    {
        if (!is_array($categoryId)) {
            $categoryId = [$categoryId];
        }

        $data = $this->model
            ->whereHas('categories', function ($query) use ($categoryId) {
                $query->whereIn('app_project_categories.id', $categoryId);
            });

        if ($paginate != 0) {
            return $this->applyBeforeExecuteQuery($data)->paginate($paginate);
        }

        return $this->applyBeforeExecuteQuery($data)->limit($limit)->get();
    }
}
