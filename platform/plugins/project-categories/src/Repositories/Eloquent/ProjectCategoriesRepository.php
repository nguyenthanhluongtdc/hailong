<?php

namespace Platform\ProjectCategories\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\ProjectCategories\Repositories\Interfaces\ProjectCategoriesInterface;
use Platform\Base\Enums\BaseStatusEnum;

class ProjectCategoriesRepository extends RepositoriesAbstract implements ProjectCategoriesInterface
{
    public function getByCategory($categoryId, $paginate = 12, $limit = 0)
    {
        if (!is_array($categoryId)) {
            $categoryId = [$categoryId];
        }

        $data = $this->model
        ->where('app_projects.status', BaseStatusEnum::PUBLISHED)
        ->join('app_project_category_project', 'app_project_category_project.project_id', '=', 'app_projects.id')
        ->join('app_project_categories', 'app_project_categories.id', '=', 'app_project_category_project.category_id')
        ->whereIn('app_project_category_project.category_id', $categoryId)
        ->select('app_projects.*')
        ->distinct()
        ->with('slugable')
        ->orderBy('app_projects.created_at', 'desc');
            
        if ($paginate != 0) {
            return $this->applyBeforeExecuteQuery($data)->paginate($paginate);
        }

        return $this->applyBeforeExecuteQuery($data)->limit($limit)->get();
    }
}
