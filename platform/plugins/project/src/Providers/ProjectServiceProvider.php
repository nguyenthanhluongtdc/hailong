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
                'id'          => 'cms-plugins-construction',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/project::project.construction',
                'icon'        => 'fa fa-building',
                'url'         => route('project.index'),
                'permissions' => ['project.index'],
            ])->registerItem([
                'id'          => 'cms-plugins-project',
                'priority'    => 4,
                'parent_id'   => 'cms-plugins-construction',
                'name'        => 'plugins/project::project.name',
                'icon'        => '',
                'url'         => route('project.index'),
                'permissions' => ['project.index'],
            ]);
        });

        $this->app->register(HookServiceProvider::class);
        \SlugHelper::registerModule(Project::class);
        \SlugHelper::setPrefix(Project::class, 'projects');
        if (is_plugin_active('Gallery')) {
            \Gallery::registerModule([Project::class]);
        }
        $this->app->booted(function () {
            if (defined('CUSTOM_FIELD_MODULE_SCREEN_NAME')) {
                \CustomField::registerModule(Project::class)
                    ->registerRule('basic', __('Your plugin name'), Project::class, function () {
                        return $this->app->make(ProjectInterface::class)->pluck('name', 'id');
                    })
                    ->expandRule('other', 'Model', 'model_name', function () {
                        return [
                            Project::class => __('Project'),
                        ];
                    });
            }
        });
    }
}
