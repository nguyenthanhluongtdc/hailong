<?php

namespace Platform\Project\Services;

use Platform\Project\Models\Project;
use Illuminate\Http\Request;

class StoreCategoryService
{

    /**
     * @param Request $request
     * @param Project $Project
     * @return mixed|void
     */
    public function execute(Request $request, Project $project)
    {
        $categories = $request->input('categories');
        if (!empty($categories) && is_array($categories)) {
            $project->categories()->sync($categories);
        }
    }
}
