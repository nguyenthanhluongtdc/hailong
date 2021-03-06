<?php

namespace Platform\ProjectCategories\Http\Controllers;

use Platform\ProjectCategories\Repositories\Interfaces\ProjectCategoriesInterface;
use Platform\Base\Http\Controllers\BaseController;
use Platform\Slug\Repositories\Interfaces\SlugInterface;
use Platform\ProjectCategories\Models\ProjectCategories;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Project\Repositories\Interfaces\ProjectInterface;
use SlugHelper;
use SeoHelper;
use Theme;

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

        $condition = [
            'id'     => $slug->reference_id,
            'status' => BaseStatusEnum::PUBLISHED,
        ];

        $category = app(ProjectCategoriesInterface::class)
                    ->getFirstBy($condition, ['*'], ['slugable']);

        $paginate = theme_option('number_projects_per_page_in_category'); 

        $projects = $this->projectRepository->getByCategory($category->id, $paginate);

        SeoHelper::setTitle($category->name)
                    ->setDescription($category->description);

        Theme::breadcrumb()->add(__('Home'), route('public.index'))
                            ->add(SeoHelper::getTitle(), $category->url);

        if (isset($category->slug) && $category->slug !== $slug->key) {
            return redirect()->to(route('public.single', SlugHelper::getPrefix(ProjectCategories::class) . '/' . $category->slug));
        }

        return Theme::scope('project-categories.projects', compact('projects'),
            'plugins/project-categories::projects')->render();
    }
}
