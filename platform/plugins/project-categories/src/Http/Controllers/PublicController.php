<?php

namespace Platform\ProjectCategories\Http\Controllers;

use Platform\ProjectCategories\Repositories\Interfaces\ProjectCategoriesInterface;
use Platform\Base\Http\Controllers\BaseController;
use Platform\Slug\Repositories\Interfaces\SlugInterface;
use Platform\ProjectCategories\Models\ProjectCategories;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Project\Repositories\Interfaces\ProjectInterface;
use SlugHelper;

class PublicCOntroller extends BaseController
{
    /**
     * @var ProjectCategoriesInterface
     * @var ProjectInterface
     */
    protected $projectCategoriesRepository;
    protected $projectRepository;

    /**
     * @var SlugInterface
     */
    protected $slugRepository;

    /**
     * @param ProjectCategoriesInterface $projectCategoriesRepository
     * @param ProjectInterface $projectRepository
     */
    public function __construct(ProjectCategoriesInterface $projectCategoriesRepository, SlugInterface $slugRepository, ProjectInterface $projectRepository)
    {
        $this->projectCategoriesRepository = $projectCategoriesRepository;
        $this->slugRepository = $slugRepository;
        $this->projectRepository = $projectRepository;
    }

    /**
     * Function get project by slug category
     *
     * @param [type] $slug
     * @return void
     */
    public function getProjectsByCategory($slug)
    {

        // $slug = $this->slugRepository->getFirstBy([
        //     'key' => $slug,
        //     'reference_type' => ProjectCategories::class,
        //     'prefix' => SlugHelper::getPrefix(ProjectCategories::class)
        // ]);

        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(ProjectCategories::class), ProjectCategories::class);

        if (!$slug || ($slug && !$slug->reference)) {
            abort(404);
        }

        $category = $slug->reference;

        $projects = $this->projectRepository->getByCategory($category->id);

        dd($projects);
    }
}
