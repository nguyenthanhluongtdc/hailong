<?php
use Platform\ProjectCategories\Repositories\Interfaces\ProjectCategoriesInterface;

if(!function_exists('get_all_project_categories')){
    function get_all_project_categories() {
        return app(ProjectCategoriesInterface::class)->getAllCategory();
    }
}

