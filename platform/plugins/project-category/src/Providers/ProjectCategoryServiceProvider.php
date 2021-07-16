<?php

namespace Platform\ProjectCategory\Providers;

use Platform\ProjectCategory\Models\ProjectCategory;
use Illuminate\Support\ServiceProvider;
use Platform\ProjectCategory\Repositories\Caches\ProjectCategoryCacheDecorator;
use Platform\ProjectCategory\Repositories\Eloquent\ProjectCategoryRepository;
use Platform\ProjectCategory\Repositories\Interfaces\ProjectCategoryInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;
use SlugHelper;

class ProjectCategoryServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(ProjectCategoryInterface::class, function () {
            return new ProjectCategoryCacheDecorator(new ProjectCategoryRepository(new ProjectCategory));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/project-category')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([ProjectCategory::class]);
            }
            $this->app->booted(function () {
                SlugHelper::registerModule(ProjectCategory::class);
              
            });

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-projects-category',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'Quản lý dự án',
                'icon'        => 'fas fa-headset',
                'url'         => route('project-category.index'),
                'permissions' => ['project-category.index'],
            ])
            ->registerItem(
                [
                    'id'          => 'cms-plugins-projects-category-sub',
                    'priority'    => 2,
                    'parent_id'   => 'cms-plugins-projects-category',
                    'name'        => 'Loại dự án',
                    'icon'        => null,
                    'url'         => route('project-category.index'),
                    'permissions' => ['project-category.index'],
                ]
            );
        });
    }
}
