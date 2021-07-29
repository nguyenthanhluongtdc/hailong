<?php
use Platform\ProjectCategories\Models\ProjectCategories;
use Platform\Project\Repositories\Interfaces\ProjectInterface;
use Platform\Project\Models\Project;
use Platform\Base\Enums\BaseStatusEnum;

if(!function_exists('get_all_projects')) {
    function get_all_projects($paginate = 6) {
        return app(ProjectInterface::class)->getAllProject($paginate);
    }
}

if (!function_exists('get_featured_projects')) {
    /**
     * @param array $params
     * @return mixed
     */
    function get_featured_projects(array $params = [], $limit = 9)
    {
        $params = array_merge([
            'condition' => [
                'app_projects.is_featured'  => 1,
                'app_projects.status'       => BaseStatusEnum::PUBLISHED,
            ],
            'take'      => $limit,
            'order_by'  => [
                'app_projects.created_at' => 'DESC',
            ],
            'select'    => ['app_projects.*'],
            'with'      => [],
        ], $params);

        return app(ProjectInterface::class)->advancedGet($params);
    }
}