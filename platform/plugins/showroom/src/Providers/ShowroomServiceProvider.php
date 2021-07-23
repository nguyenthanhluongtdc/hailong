<?php

namespace Platform\Showroom\Providers;

use Platform\Showroom\Models\Showroom;
use Illuminate\Support\ServiceProvider;
use Platform\Showroom\Repositories\Caches\ShowroomCacheDecorator;
use Platform\Showroom\Repositories\Eloquent\ShowroomRepository;
use Platform\Showroom\Repositories\Interfaces\ShowroomInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class ShowroomServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(ShowroomInterface::class, function () {
            return new ShowroomCacheDecorator(new ShowroomRepository(new Showroom));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/showroom')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Showroom::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-showroom',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/showroom::showroom.name',
                'icon'        => 'fa fa-list',
                'url'         => route('showroom.index'),
                'permissions' => ['showroom.index'],
            ]);
        });
    }
}
