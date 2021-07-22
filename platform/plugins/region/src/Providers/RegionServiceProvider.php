<?php

namespace Platform\Region\Providers;

use Platform\Region\Models\Region;
use Illuminate\Support\ServiceProvider;
use Platform\Region\Repositories\Caches\RegionCacheDecorator;
use Platform\Region\Repositories\Eloquent\RegionRepository;
use Platform\Region\Repositories\Interfaces\RegionInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class RegionServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(RegionInterface::class, function () {
            return new RegionCacheDecorator(new RegionRepository(new Region));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/region')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Region::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-region',
                'priority'    => 5,
                'parent_id'   =>  'cms-plugins-factory-parent',
                'name'        => 'plugins/region::region.name',
                'icon'        => 'fa fa-list',
                'url'         => route('region.index'),
                'permissions' => ['region.index'],
            ]);
        });
    }
}
