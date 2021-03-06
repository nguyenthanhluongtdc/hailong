<?php
namespace Platform\Project\Http\Controllers;
use Platform\Project\Models\Project;
use Platform\Base\Http\Controllers\BaseController;
use Platform\Project\Repositories\Interfaces\ProjectInterface;
use Platform\Gallery\Repositories\Interfaces\GalleryMetaInterface;
use SlugHelper;
use SeoHelper;
use Theme;

class PublicController extends BaseController {

    protected $projectRepository;

    public function __construct(ProjectInterface $projectRepository) {
        $this->projectRepository = $projectRepository;
    }

    public function getProject($slug) {

        $model = Project::class;
        $prefix = SlugHelper::getPrefix($model, 'projects');
        $slug = SlugHelper::getSlug($slug, $prefix, $model);

        if(!$slug) {
            abort(404);
        }

        $project = $this->projectRepository->getProject($slug);

        
        $category = $project->categories->first();

        SeoHelper::setTitle($project->name)
                    ->setDescription($project->description);

        Theme::breadcrumb()->add(__('Home'), route('public.index'));
        
        if($category) {
            Theme::breadcrumb()->add($category->name, $category->url);
        }
                            
        Theme::breadcrumb()->add(SeoHelper::getTitle(), $project->url); 
        
        $galleries = [];
        if (is_plugin_active('gallery')) {
            $galleries = app(GalleryMetaInterface::class)->getFirstBy(
                [
                    'reference_id'=>$project->id,
                    'reference_type' => Project::class,
                ]);
        }

        $data['slug'] = $project->slug;

        if (isset($data['slug']) && $data['slug'] !== $slug->key) {
            return redirect()->to(route('public.single', SlugHelper::getPrefix(Project::class) . '/' . $data['slug']));
        }

        return Theme::scope('project.project', compact('project','galleries'), 'plugins/project::project')->render();
    }

}