<?php
use Platform\ProjectCategories\Models\ProjectCategories;

if(!function_exists('get_all_project_categories')) {
    function get_all_project_categories() {
        return ProjectCategories::latest()->get();
    }
}