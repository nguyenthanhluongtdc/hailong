<?php

namespace Platform\Project\Providers;

use Platform\Base\Enums\BaseStatusEnum;
use Platform\Project\Repositories\Interfaces\ProjectInterface;
use Illuminate\Support\ServiceProvider;
use Platform\Project\Models\Project;
use Illuminate\Support\Facades\Auth;
use Platform\Page\Repositories\Interfaces\PageInterface;
use Menu;

class HookServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (function_exists('theme_option')) {
            add_action(RENDERING_THEME_OPTIONS_PAGE, [$this, 'addThemeOptions'], 35);
        }
    }

      /**
     * Register sidebar options in menu
     * @throws Throwable
     */
    public function addThemeOptions()
    {
        $pages = $this->app->make(PageInterface::class)->pluck('name', 'id', ['status' => BaseStatusEnum::PUBLISHED]);

        theme_option()
            ->setSection([
                'title'      => 'Project',
                'desc'       => 'Theme options for project',
                'id'         => 'opt-text-subsection-project',
                'subsection' => true,
                'icon'       => 'fa fa-edit',
                'fields'     => [
                    [
                        'id'         => 'number_projects_page_main',
                        'type'       => 'number',
                        'label'      => trans('plugins/project::base.number_projects_page_main'),
                        'attributes' => [
                            'name'    => 'number_projects_page_main',
                            'value'   => 12,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                    [
                        'id'         => 'number_projects_per_page_in_category',
                        'type'       => 'number',
                        'label'      => trans('plugins/project::base.number_projects_per_page_in_category'),
                        'attributes' => [
                            'name'    => 'number_projects_per_page_in_category',
                            'value'   => 3,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                    [
                        'id'         => 'number_typical_projects',
                        'type'       => 'number',
                        'label'      => trans('plugins/project::base.number_typical_projects'),
                        'attributes' => [
                            'name'    => 'number_typical_projects',
                            'value'   => 3,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                ],
            ]);
    }
}
