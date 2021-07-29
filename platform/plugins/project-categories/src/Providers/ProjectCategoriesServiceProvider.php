<?php

namespace Platform\ProjectCategories\Providers;

use Platform\ProjectCategories\Models\ProjectCategories;
use Illuminate\Support\ServiceProvider;
use Platform\ProjectCategories\Repositories\Caches\ProjectCategoriesCacheDecorator;
use Platform\ProjectCategories\Repositories\Eloquent\ProjectCategoriesRepository;
use Platform\ProjectCategories\Repositories\Interfaces\ProjectCategoriesInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;
use SlugHelper;

class ProjectCategoriesServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(ProjectCategoriesInterface::class, function () {
            return new ProjectCategoriesCacheDecorator(new ProjectCategoriesRepository(new ProjectCategories));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/project-categories')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([ProjectCategories::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-project-categories',
                'priority'    => 5,
                'parent_id'   => 'cms-plugins-construction',
                'name'        => 'plugins/project-categories::project-categories.name',
                'icon'        => '',
                'url'         => route('project-categories.index'),
                'permissions' => ['project-categories.index'],
            ]);
        });

        $this->app->register(HookServiceProvider::class);

        \SlugHelper::registerModule(ProjectCategories::class, 'Project Categories');
        SlugHelper::setPrefix(ProjectCategories::class, 'project-categories');
    }
}
