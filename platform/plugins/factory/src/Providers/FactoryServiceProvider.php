<?php

namespace Platform\Factory\Providers;

use Platform\Factory\Models\Factory;
use Illuminate\Support\ServiceProvider;
use Platform\Factory\Repositories\Caches\FactoryCacheDecorator;
use Platform\Factory\Repositories\Eloquent\FactoryRepository;
use Platform\Factory\Repositories\Interfaces\FactoryInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class FactoryServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(FactoryInterface::class, function () {
            return new FactoryCacheDecorator(new FactoryRepository(new Factory));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/factory')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Factory::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-factory-parent',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/factory::factory.name',
                'icon'        => 'fa fa-list',
                // 'url'         => route('factory.index'),
                // 'permissions' => ['factory.index'],
            ])
            ->registerItem([
                'id'          => 'cms-plugins-factory',
                'priority'    => 1,
                'parent_id'   => 'cms-plugins-factory-parent',
                'name'        => 'plugins/factory::factory.name',
                'icon'        => 'fa fa-list',
                'url'         => route('factory.index'),
                'permissions' => ['factory.index'],
            ]);
        });
    }
}
