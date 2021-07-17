<?php

namespace Platform\Project\Providers;

use Platform\Project\Models\Project;
use Illuminate\Support\ServiceProvider;
use Platform\Project\Repositories\Caches\ProjectCacheDecorator;
use Platform\Project\Repositories\Eloquent\ProjectRepository;
use Platform\Project\Repositories\Interfaces\ProjectInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;
use CustomField;
use Gallery;
use Language;
use SlugHelper;

class ProjectServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(ProjectInterface::class, function () {
            return new ProjectCacheDecorator(new ProjectRepository(new Project));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/project')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Project::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-project',
                'priority'    => 1,
                'parent_id'   => 'cms-plugins-projects-category',
                'name'        => 'Dự án',
                'icon'        => null,
                'url'         => route('project.index'),
                'permissions' => ['project.index'],
            ]);
        });
        \SlugHelper::registerModule(Project::class);
        \SlugHelper::setPrefix(Project::class, 'du-an');
        $this->app->booted(function () {
            \SlugHelper::registerModule(Project::class);
            \SlugHelper::setPrefix(Project::class, 'du-an');
        });
        $this->app->booted(function () {
            if (defined('CUSTOM_FIELD_MODULE_SCREEN_NAME')) {
                CustomField::registerModule(Projects::class)
                    ->registerRule('basic', __('plugins/projects::projects.name'), Projects::class, function () {
                        return $this->app->make(ProjectsInterface::class)->pluck('name', 'id');
                    })
                    ->expandRule('other', 'Model', 'model_name', function () {
                        return [
                            Projects::class => __('plugins/projects::projects.name'),
                        ];
                    });
            }
        });
       
    }
    
}
