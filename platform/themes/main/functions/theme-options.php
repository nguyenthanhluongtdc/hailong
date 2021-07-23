<?php
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Page\Repositories\Interfaces\PageInterface;
app()->booted(function () {
    $pages = app(PageInterface::class)
    ->pluck('name', 'id', ['status' => BaseStatusEnum::PUBLISHED]);

    theme_option()
        ->setField([
            'id'         => 'copyright',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Copyright'),
            'attributes' => [
                'name'    => 'copyright',
                'value'   => __('© :year Laravel Technologies. All right reserved.', ['year' => now()->format('Y')]),
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Change copyright'),
                    'data-counter' => 250,
                ],
            ],
            'helper'     => __('Copyright on footer of site'),
        ])
        ->setField([
            'id'         => 'primary_font',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'googleFonts',
            'label'      => __('Primary font'),
            'attributes' => [
                'name'  => 'primary_font',
                'value' => 'Roboto',
            ],
        ])
        ->setField([
            'id'         => 'primary_color',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'customColor',
            'label'      => __('Primary color'),
            'attributes' => [
                'name'  => 'primary_color',
                'value' => '#ff2b4a',
            ],
        ])->setField([
            'id'         => 'aboutus_id',
            'section_id' => 'opt-text-subsection-page',
            'type'       => 'select',
            'label'      => __('link about us page on home page'),
            'attributes' => [
                'name'  => 'aboutus_id',
                'list'    => ['' => trans('packages/page::pages.settings.select')] + $pages,
                'value'   => '',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])->setField([
            'id'         => 'project_id',
            'section_id' => 'opt-text-subsection-page',
            'type'       => 'select',
            'label'      => __('link project page on home page'),
            'attributes' => [
                'name'  => 'project_id',
                'list'    => ['' => trans('packages/page::pages.settings.select')] + $pages,
                'value'   => '',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])->setField([
            'id'         => 'news_id',
            'section_id' => 'opt-text-subsection-page',
            'type'       => 'select',
            'label'      => __('link news page on home page'),
            'attributes' => [
                'name'  => 'news_id',
                'list'    => ['' => trans('packages/page::pages.settings.select')] + $pages,
                'value'   => '',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])->setField([
            'id'         => 'products_id',
            'section_id' => 'opt-text-subsection-page',
            'type'       => 'select',
            'label'      => __('Get product page'),
            'attributes' => [
                'name'  => 'products_id',
                'list'    => ['' => trans('packages/page::pages.settings.select')] + $pages,
                'value'   => '',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ]);
});
