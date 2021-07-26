<?php

namespace Platform\Project\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\Project\Repositories\Interfaces\ProjectInterface;
use Platform\Base\Enums\BaseStatusEnum;

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

    public function getProject($projectId) {
        $data = $this->model
                ->where(function($query) use ($projectId) {
                    $query
                    ->where([
                        'id' => $projectId,
                        'status' =>  BaseStatusEnum::PUBLISHED
                    ]);
                });

        return $this->applyBeforeExecuteQuery($data)->first();
    }

    public function getAllProject($paginate = 6) {
        $data = $this->model
                ->where('status', BaseStatusEnum::PUBLISHED)
                ->orderBy('created_at', 'DESC');

        return $this->applyBeforeExecuteQuery($data)->paginate($paginate);
    }
}
