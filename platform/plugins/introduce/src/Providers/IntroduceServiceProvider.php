<?php

namespace Platform\Introduce\Providers;

use Platform\Introduce\Models\Introduce;
use Illuminate\Support\ServiceProvider;
use Platform\Introduce\Repositories\Caches\IntroduceCacheDecorator;
use Platform\Introduce\Repositories\Eloquent\IntroduceRepository;
use Platform\Introduce\Repositories\Interfaces\IntroduceInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;
use Language;

class IntroduceServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(IntroduceInterface::class, function () {
            return new IntroduceCacheDecorator(new IntroduceRepository(new Introduce));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/introduce')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Introduce::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-introduce',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/introduce::introduce.name',
                'icon'        => 'fa fa-list',
                'url'         => route('introduce.index'),
                'permissions' => ['introduce.index'],
            ]);
        });

        $this->app->booted(function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                Language::registerModule([Introduce::class]);
            }

            if (defined('CUSTOM_FIELD_MODULE_SCREEN_NAME')) {
                \CustomField::registerModule(Introduce::class)
                    ->registerRule('basic', trans('plugins/introduce::introduce.name'), Introduce::class, function () {
                        return $this->app->make(IntroduceInterface::class)->pluck('name', 'id');
                    })
                    ->expandRule('other', trans('plugins/custom-field::rules.model_name'), 'model_name', function () {
                        return [
                            Introduce::class => trans('plugins/introduce::introduce.name'),
                        ];
                    });
            }
           
        });
        
        $this->app->register(HookServiceProvider::class);
        \SlugHelper::registerModule(Introduce::class);
    }
}
