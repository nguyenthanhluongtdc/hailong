<?php

use Platform\Base\Enums\BaseStatusEnum;
use Platform\ProjectCategory\Repositories\Interfaces\ProjectCategoryInterface;

if (!function_exists('get_projects_categories')) {
    /**
     * @return void
     */
    function get_projects_categories()
    {
        return app(ProjectCategoryInterface::class)
            ->allBy(['status' => BaseStatusEnum::PUBLISHED], [], ['id', 'name'])->pluck('name', 'id')->toArray();
    }
}