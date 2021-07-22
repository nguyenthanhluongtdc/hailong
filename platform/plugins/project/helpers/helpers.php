<?php
use Platform\ProjectCategories\Models\ProjectCategories;
use Platform\Project\Models\Project;

if(!function_exists('get_all_project_categories')) {
    function get_all_project_categories() {
        return ProjectCategories::latest()->get();
    }
}

if(!function_exists('get_all_projects')) {
    function get_all_projects($paginate = 6) {
        return Project::latest()->paginate($paginate);
    }
}

if(!function_exists('get_feadture_projects')) {
    function get_feadture_projects($limit = 3) {
        return Project::limit($limit)->get();
    }
}