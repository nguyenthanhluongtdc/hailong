<?php

namespace Platform\FactoryAddress\Providers;

use Platform\FactoryAddress\Models\FactoryAddress;
use Illuminate\Support\ServiceProvider;
use Platform\FactoryAddress\Repositories\Caches\FactoryAddressCacheDecorator;
use Platform\FactoryAddress\Repositories\Eloquent\FactoryAddressRepository;
use Platform\FactoryAddress\Repositories\Interfaces\FactoryAddressInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class FactoryAddressServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(FactoryAddressInterface::class, function () {
            return new FactoryAddressCacheDecorator(new FactoryAddressRepository(new FactoryAddress));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/factory-address')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([FactoryAddress::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-factory-address',
                'priority'    => 5,
                'parent_id'   => 'cms-plugins-factory-parent',
                'name'        => 'plugins/factory-address::factory-address.name',
                'icon'        => 'fa fa-list',
                'url'         => route('factory-address.index'),
                'permissions' => ['factory-address.index'],
            ]);
        });
    }
}
