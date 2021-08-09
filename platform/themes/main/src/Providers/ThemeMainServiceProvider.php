<?php

namespace Platform\ThemeMain\Providers;

use Platform\Base\Supports\Helper;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Support\ServiceProvider;

class ThemeMainServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    /**
     * This provider is deferred and should be lazy loaded.
     *
     * @var boolean
     */
    protected $defer = true;

    public function register()
    {
        Helper::autoload(__DIR__ . '/../../helpers');
    }
}