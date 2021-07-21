<?php

namespace Platform\ProjectCategories\Providers;

use Platform\Base\Enums\BaseStatusEnum;
use Platform\ProjectCategories\Repositories\Interfaces\ProjectCategoriesInterface;
use Illuminate\Support\ServiceProvider;
use Platform\ProjectCategories\Models\ProjectCategories;
use Illuminate\Support\Facades\Auth;
use Menu;

class HookServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (defined('MENU_ACTION_SIDEBAR_OPTIONS')) {
            Menu::addMenuOptionModel(ProjectCategories::class);
            add_action(MENU_ACTION_SIDEBAR_OPTIONS, [$this, 'registerMenuOptions'], 5);
        }
    }

      /**
     * Register sidebar options in menu
     * @throws Throwable
     */
    public function registerMenuOptions()
    {

        if (Auth::user()->hasPermission('tags.index')) {
            Menu::registerMenuOptions(ProjectCategories::class, 'Project Categories');
        }
    }
}
