<?php

namespace Platform\Introduce\Providers;

use Platform\Base\Enums\BaseStatusEnum;
use Platform\Introduce\Repositories\Interfaces\IntroduceInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Platform\Introduce\Models\Introduce;
use Menu;

class HookServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (defined('MENU_ACTION_SIDEBAR_OPTIONS')) {
            Menu::addMenuOptionModel(Introduce::class);
            add_action(MENU_ACTION_SIDEBAR_OPTIONS, [$this, 'registerMenuOptions'], 12);
        }
        if (function_exists('shortcode')) {
            add_shortcode('static-introduce', trans('plugins/introduce::introduce.static_introduce_short_code_name'),
                trans('plugins/introduce::introduce.static_introduce_short_code_description'), [$this, 'render']);

            shortcode()->setAdminConfig('static-introduce', view('plugins/introduce::partials.short-code-admin-config')->render());
        }
    }

    /**
     * @param \stdClass $shortcode
     * @return null
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */

      /**
     * Register sidebar options in menu
     *
     * @throws Throwable
     */
    public function registerMenuOptions()
    {
        if (Auth::user()->hasPermission('introduce.index')) {
            Menu::registerMenuOptions(Introduce::class, trans('plugins/introduce::introduce.name'));
        }

        return true;
    }

    public function render($shortcode)
    {
        $introduce = $this->app->make(IntroduceInterface::class)
            ->getFirstBy([
                'alias'  => $shortcode->alias,
                'status' => BaseStatusEnum::PUBLISHED,
            ]);

        if (empty($introduce)) {
            return null;
        }

        return $introduce->content;
    }
}
