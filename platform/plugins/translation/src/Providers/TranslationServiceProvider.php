<?php

namespace Platform\Translation\Providers;

use Platform\Translation\Console\UpdateThemeTranslationCommand;
use Illuminate\Routing\Events\RouteMatched;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Platform\Translation\Console\CleanCommand;
use Platform\Translation\Console\ExportCommand;
use Platform\Translation\Console\ImportCommand;
use Platform\Translation\Console\ResetCommand;
use Platform\Translation\Manager;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind('translation-manager', Manager::class);

        $this->commands([
            ImportCommand::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                ResetCommand::class,
                ExportCommand::class,
                CleanCommand::class,
                UpdateThemeTranslationCommand::class,
            ]);
        }
    }

    public function boot()
    {
        $this->setNamespace('plugins/translation')
            ->loadAndPublishConfigurations(['general', 'permissions'])
            ->loadMigrations()
            ->loadRoutes(['web'])
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->publishAssets();

        Event::listen(RouteMatched::class, function () {
            dashboard_menu()
                ->registerItem([
                    'id'          => 'cms-plugin-translation',
                    'priority'    => 997,
                    'parent_id'   => null,
                    'name'        => 'plugins/translation::translation.translations',
                    'icon'        => 'fas fa-language',
                    'url'         => route('translations.index'),
                    'permissions' => ['translations.index'],
                ])
                ->registerItem([
                    'id'          => 'cms-plugin-translation-locale',
                    'priority'    => 1,
                    'parent_id'   => 'cms-plugin-translation',
                    'name'        => 'plugins/translation::translation.locales',
                    'icon'        => null,
                    'url'         => route('translations.locales'),
                    'permissions' => ['translations.index'],
                ])
                ->registerItem([
                    'id'          => 'cms-plugin-translation-theme-translations',
                    'priority'    => 2,
                    'parent_id'   => 'cms-plugin-translation',
                    'name'        => 'plugins/translation::translation.theme-translations',
                    'icon'        => null,
                    'url'         => route('translations.theme-translations'),
                    'permissions' => ['translations.index'],
                ])
                ->registerItem([
                    'id'          => 'cms-plugin-translation-admin-translations',
                    'priority'    => 3,
                    'parent_id'   => 'cms-plugin-translation',
                    'name'        => 'plugins/translation::translation.admin-translations',
                    'icon'        => null,
                    'url'         => route('translations.index'),
                    'permissions' => ['translations.index'],
                ]);
        });
    }
}
