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
        ])
        ->setField([
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
                ]
            ]
        ])
        ->setField([
            'id' => 'number_of_post_featured',
            'section_id' => 'opt-text-subsection-blog',
            'type' => 'number', // text, password, email, number
            'label' => __('Number of post featured'),
            'attributes' => [
                'name' => 'number_of_post_featured',
                'value' => 3, // default value
                'options' => [
                    'class' => 'form-control',
                    'data-counter' => 120,
                ]
            ]
        ])
        ->setField([
            'id' => 'number_of_post_other',
            'section_id' => 'opt-text-subsection-blog',
            'type' => 'number', // text, password, email, number
            'label' => __('Number of post other'),
            'attributes' => [
                'name' => 'number_of_post_other',
                'value' => 8, // default value
                'options' => [
                    'class' => 'form-control',
                    'data-counter' => 120,
                ]
            ]
        ])
        ->setSection([ // Set section with no field
            'title' => __('Slogan'),
            'desc' => __('Slogan settings'),
            'id' => 'opt-slogan',
            'subsection' => true,
            'icon' => 'fa fa-home',
        ])
        ->setField([
            'id'         => 'slogan_repeater',
            'section_id' => 'opt-slogan',
            'type'       => 'repeater',
            'label'      => __('Repeater Slogan'),
            'attributes' => [
                'name'   => 'slogan_repeater',
                'value'  => null,
                'fields' => [

                    [
                        'type'       => 'text',
                        'label'      => __('Icon'),
                        'attributes' => [
                            'name'  => 'icon',
                            'value' => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 255,
                            ],
                        ],
                        'helper' => __('Get icon in link https://fontawesome.com/v5.15/icons')
                    ],
                    [
                        'type'       => 'text',
                        'label'      => __('Title'),
                        'attributes' => [
                            'name'    => 'title',
                            'value'   => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 255,
                            ],
                        ],
                    ],
                    [
                        'type'       => 'textarea',
                        'label'      => __('Description'),
                        'attributes' => [
                            'name'    => 'description',
                            'value'   => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 255,
                                'rows'         => 3,
                            ],
                        ],
                    ],
                ],
            ],
        ])->setSection([ // Set section with no field
            'title' => __('Footer'),
            'desc' => __('Footer settings'),
            'id' => 'opt-footer',
            'subsection' => true,
            'icon' => 'fa fa-home',
        ])->setField([
            'id'         => 'footer_info_repeater',
            'section_id' => 'opt-footer',
            'type'       => 'repeater',
            'label'      => __('More information about the company'),
            'attributes' => [
                'name'   => 'footer_info_repeater',
                'value'  => null,
                'fields' => [
                    [
                        'type'       => 'text',
                        'label'      => __('Text'),
                        'attributes' => [
                            'name'    => 'information_id',
                            'value'   => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 255,
                            ],
                        ],
                    ]
                ],
            ],
        ])
        // ->setField([
        //     'id'         => 'footer_col_link_one_repeater',
        //     'section_id' => 'opt-footer',
        //     'type'       => 'repeater',
        //     'label'      => __('Link column one'),
        //     'attributes' => [
        //         'name'   => 'footer_col_link_one_repeater',
        //         'value'  => null,
        //         'fields' => [
        //             [
        //                 'type'       => 'select',
        //                 'label'      => __('Link page'),
        //                 'attributes' => [
        //                     'name'  => 'link_page_id',
        //                     'list'    => ['' => trans('packages/page::pages.settings.select')] + $pages,
        //                     'value'   => '',
        //                     'options' => [
        //                         'class' => 'form-control',
        //                     ],
        //                 ],
        //             ]
        //         ],
        //     ],
        // ])->setField([
        //     'id'         => 'footer_col_link_two_repeater',
        //     'section_id' => 'opt-footer',
        //     'type'       => 'repeater',
        //     'label'      => __('Link column two'),
        //     'attributes' => [
        //         'name'   => 'footer_col_link_two_repeater',
        //         'value'  => null,
        //         'fields' => [
        //             [
        //                 'type'       => 'select',
        //                 'label'      => __('Link page'),
        //                 'attributes' => [
        //                     'name'  => 'link_page_id',
        //                     'list'    => ['' => trans('packages/page::pages.settings.select')] + $pages,
        //                     'value'   => '',
        //                     'options' => [
        //                         'class' => 'form-control',
        //                     ],
        //                 ],
        //             ]
        //         ],
        //     ],
        // ])->setField([
        //     'id'         => 'footer_col_link_three_repeater',
        //     'section_id' => 'opt-footer',
        //     'type'       => 'repeater',
        //     'label'      => __('Link column three'),
        //     'attributes' => [
        //         'name'   => 'footer_col_link_three_repeater',
        //         'value'  => null,
        //         'fields' => [
        //             [
        //                 'type'       => 'select',
        //                 'label'      => __('Link page'),
        //                 'attributes' => [
        //                     'name'  => 'link_page_id',
        //                     'list'    => ['' => trans('packages/page::pages.settings.select')] + $pages,
        //                     'value'   => '',
        //                     'options' => [
        //                         'class' => 'form-control',
        //                     ],
        //                 ],
        //             ]
        //         ],
        //     ],
        // ])
        ->setField([
            'id'         => 'footer_social_network_repeater',
            'section_id' => 'opt-footer',
            'type'       => 'repeater',
            'label'      => __('Social network'),
            'attributes' => [
                'name'   => 'footer_social_network_repeater',
                'value'  => null,
                'fields' => [
                    [
                        'type'       => 'text',
                        'label'      => __('Name'),
                        'attributes' => [
                            'name'    => 'name',
                            'value'   => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 255,
                            ],
                        ],
                    ],
                    [
                        'type'       => 'text',
                        'label'      => __('Link'),
                        'attributes' => [
                            'name'    => 'link',
                            'value'   => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 255,
                            ],
                        ],
                    ],
                    [
                        'type'       => 'mediaImage',
                        'label'      => __('Image'),
                        'attributes' => [
                            'name'    => 'image',
                            'value'   => null
                        ],
                    ]
                ],
            ],
        ])
        ->setField([
            'id'         => 'footer_linked_list_repeater',
            'section_id' => 'opt-footer',
            'type'       => 'repeater',
            'label'      => __('Linked list'),
            'attributes' => [
                'name'   => 'footer_linked_list_repeater',
                'value'  => null,
                'fields' => [
                    [
                        'type'       => 'text',
                        'label'      => __('Name'),
                        'attributes' => [
                            'name'    => 'name',
                            'value'   => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 255,
                            ],
                        ],
                    ],
                    [
                        'type'       => 'text',
                        'label'      => __('Link'),
                        'attributes' => [
                            'name'    => 'link',
                            'value'   => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 255,
                            ],
                        ],
                    ],
                    [
                        'type'       => 'mediaImage',
                        'label'      => __('Image'),
                        'attributes' => [
                            'name'    => 'image',
                            'value'   => null
                        ],
                    ]
                ],
            ],
        ])
        ->setSection([ // Set section with no field
            'title' => __('Social Network'),
            'desc' => __('Social Networksettings'),
            'id' => 'opt-social-network',
            'subsection' => true,
            'icon' => 'fa fa-home',
        ])
        ->setField([
            'id'         => 'social_network_repeater',
            'section_id' => 'opt-social-network',
            'type'       => 'repeater',
            'label'      => __('Repeater Social network'),
            'attributes' => [
                'name'   => 'social_network_repeater',
                'value'  => null,
                'fields' => [
                    [
                        'type'       => 'text',
                        'label'      => __('Social network name'),
                        'attributes' => [
                            'name'    => 'name',
                            'value'   => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 255,
                            ],
                        ],
                    ],
                    [
                        'type'       => 'text',
                        'label'      => __('Link'),
                        'attributes' => [
                            'name'  => 'link',
                            'value' => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 255,
                            ],
                        ]
                    ],
                    [
                        'type'       => 'mediaImage',
                        'label'      => __('Image'),
                        'attributes' => [
                            'name'    => 'image',
                            'value'   => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 255,
                            ],
                        ],
                    ]
                ],
            ],
        ])->setField([
            'id' => 'number_phone_genaral',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'text', // text, password, email, number
            'label' => __('SDT'),
            'attributes' => [
                'name' => 'number_phone_genaral',
                'value' => null, // default value
                'options' => [
                    'class' => 'form-control',
                    'data-counter' => 11,
                ]
            ]
        ])
        // ->setField([
        //     'id' => 'website_link_general',
        //     'section_id' => 'opt-text-subsection-general',
        //     'type' => 'text', // text, password, email, number
        //     'label' => __('web link'),
        //     'attributes' => [
        //         'name' => 'website_link_general',
        //         'value' => null, // default value
        //         'options' => [
        //             'class' => 'form-control',
        //             'data-counter' => 200,
        //         ]
        //     ]
        // ])
        ->setSection([ // Set section with no field
            'title' => __('Popup'),
            'desc' => __('Popup settings'),
            'id' => 'opt-text-subsection-popup',
            'subsection' => true,
            'icon' => 'fa fa-home',
        ])
        ->setField([
            'id' => 'image_popup',
            'section_id' => 'opt-text-subsection-popup',
            'type' => 'mediaImage',
            'label' => __('Image popup').' (800x800)px',
            'attributes' => [
                'name' => 'image_popup',
                'value' => null,

            ],
        ])
        ->setField([
            'id' => 'link_popup',
            'section_id' => 'opt-text-subsection-popup',
            'type' => 'text', // text, password, email, number
            'label' => __('Link popup'),
            'attributes' => [
                'name' => 'link_popup',
                'value' => null, // default value
                'options' => [
                    'class' => 'form-control',
                    'data-counter' => 200,
                ]
            ]
        ])
        ->setField([
            'id' => 'enable_popup',
            'section_id' => 'opt-text-subsection-popup',
            'type' => 'onOff',
            'label' => __('Enable popup'),
            'attributes' => [
                'name' => 'enable_popup',
                'value' => 0,
                'data' => [
                    0 => 'No',
                    1 => 'Yes',
                ],
                'options' => [], // Optional
            ],
            'helper' => __('Enable popup in home page'),
        ])
        ->setSection([ // Set section with no field
            'title' => __('Sidebar'),
            'desc' => __('Sidebar settings'),
            'id' => 'opt-sidebar',
            'subsection' => true,
            'icon' => 'fa fa-home',
        ])
        ->setField([ // Set field for section
            'id' => 'image_zalocode_sidebar',
            'section_id' => 'opt-sidebar',
            'type' => 'mediaImage',
            'label' => __('Image zalocode'),
            'attributes' => [
                'name' => 'image_zalocode_sidebar',
                'value' => null,
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => __('Image zalocode'),
                    'data-counter' => 200,
                ]
            ],
            'helper' =>  __('Get icon in link https://fontawesome.com/v5.15/icons'),
        ])
        ->setField([ // Set field for section
            'id' => 'icon_phone_sidebar',
            'section_id' => 'opt-sidebar',
            'type' => 'text',
            'label' => __('Icon phone'),
            'attributes' => [
                'name' => 'icon_phone_sidebar',
                'value' => null,
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => __('Icon phone'),
                    'data-counter' => 200,
                ]
            ],
            'helper' =>  __('Get icon in link https://fontawesome.com/v5.15/icons'),
        ])
        ->setField([
            'id'         => 'phone_number_list',
            'section_id' => 'opt-sidebar',
            'type'       => 'repeater',
            'label'      => __('Repeater Phone number'),
            'attributes' => [
                'name'   => 'phone_number_list',
                'value'  => null,
                'fields' => [
                    [
                        'type'       => 'text',
                        'label'      => __('Phone number'),
                        'attributes' => [
                            'name'    => 'phone_number',
                            'value'   => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 20,
                            ],
                        ],
                    ],
                ]
            ],
        ])
        ->setField([ // Set field for section
            'id' => 'icon_email_sidebar',
            'section_id' => 'opt-sidebar',
            'type' => 'text',
            'label' => __('Icon email'),
            'attributes' => [
                'name' => 'icon_email_sidebar',
                'value' => null,
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => __('Icon email'),
                    'data-counter' => 200,
                ]
            ],
            'helper' =>  __('Get icon in link https://fontawesome.com/v5.15/icons'),
        ])
        ->setField([ // Set field for section
            'id' => 'text_email_sidebar',
            'section_id' => 'opt-sidebar',
            'type' => 'text',
            'label' => __('Text email'),
            'attributes' => [
                'name' => 'text_email_sidebar',
                'value' => null,
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => __('Text email'),
                    'data-counter' => 200,
                ]
            ]
        ])
        ->setField([ // Set field for section
            'id' => 'icon_message_sidebar',
            'section_id' => 'opt-sidebar',
            'type' => 'text',
            'label' => __('Icon message'),
            'attributes' => [
                'name' => 'icon_message_sidebar',
                'value' => null,
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => __('Icon message'),
                    'data-counter' => 200,
                ]
            ]
        ])
        ->setField([ // Set field for section
            'id' => 'facebook_id_sidebar',
            'section_id' => 'opt-sidebar',
            'type' => 'text',
            'label' => __('Facebook id'),
            'attributes' => [
                'name' => 'facebook_id_sidebar',
                'value' => null,
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => __('Facebook id'),
                    'data-counter' => 200,
                ]
            ]
        ])->setField([ // Set field for section
            'id' => 'image_order',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type' => 'mediaImage',
            'label' => __('Image order').' (550x850)px',
            'attributes' => [
                'name' => 'image_order',
                'value' => null,
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => __('Order image'),
                    'data-counter' => 200,
                ]
            ]
        ])->setField([ // Set field for section
            'id' => 'image_order_success',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type' => 'mediaImage',
            'label' => __('Image order success').' (600x600)px',
            'attributes' => [
                'name' => 'image_order_success',
                'value' => null,
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => __('Successful order image'),
                    'data-counter' => 200,
                ]
            ]
        ]);

    // Facebook integration
    theme_option()
        ->setField([
            'id' => 'auto_translate',
            'section_id' => 'opt-text-subsection-general',
            'type' => 'select', // text, password, email, number
            'label' => __('Tự động dịch website'),
            'attributes' => [
                'name' => 'auto_translate',
                'data' => [ // Array options for select
                    0 => 'No',
                    1 => 'Yes',
                ],
                'value' => null, // default value
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setSection([
            'title'      => __('Facebook Integration'),
            'desc'       => __('Facebook Integration'),
            'id'         => 'opt-text-subsection-facebook-integration',
            'subsection' => true,
            'icon'       => 'fab fa-facebook',
        ])
        ->setField([
            'id'         => 'facebook_chat_enabled',
            'section_id' => 'opt-text-subsection-facebook-integration',
            'type'       => 'select',
            'label'      => __('Enable Facebook chat?'),
            'attributes' => [
                'name'    => 'facebook_chat_enabled',
                'list'    => [
                    'no'  => trans('core/base::base.no'),
                    'yes' => trans('core/base::base.yes'),
                ],
                'value'   => 'no',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
            'helper'     => __('To show chat box on that website, please go to :link and add :domain to whitelist domains!',
                [
                    'domain' => Html::link(url('')),
                    'link'   => Html::link('https://www.facebook.com/' . theme_option('facebook_page_id') . '/settings/?tab=messenger_platform'),
                ]),
        ])
        ->setField([
            'id'         => 'facebook_page_id',
            'section_id' => 'opt-text-subsection-facebook-integration',
            'type'       => 'text',
            'label'      => __('Facebook page ID'),
            'attributes' => [
                'name'    => 'facebook_page_id',
                'value'   => null,
                'options' => [
                    'class' => 'form-control',
                ],
            ],
            'helper'     => __('You can get fan page ID using this site :link',
                ['link' => Html::link('https://findmyfbid.com')]),
        ])
        ->setField([
            'id'         => 'facebook_comment_enabled_in_post',
            'section_id' => 'opt-text-subsection-facebook-integration',
            'type'       => 'select',
            'label'      => __('Enable Facebook comment in post detail page?'),
            'attributes' => [
                'name'    => 'facebook_comment_enabled_in_post',
                'list'    => [
                    'yes' => trans('core/base::base.yes'),
                    'no'  => trans('core/base::base.no'),
                ],
                'value'   => 'no',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'facebook_comment_enabled_in_gallery',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'select',
            'label'      => __('Enable Facebook comment in the gallery detail?'),
            'attributes' => [
                'name'    => 'facebook_comment_enabled_in_gallery',
                'list'    => [
                    'no'  => trans('core/base::base.no'),
                    'yes' => trans('core/base::base.yes'),
                ],
                'value'   => 'no',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'facebook_app_id',
            'section_id' => 'opt-text-subsection-facebook-integration',
            'type'       => 'text',
            'label'      => __('Facebook App ID'),
            'attributes' => [
                'name'        => 'facebook_app_id',
                'value'       => null,
                'options'     => [
                    'class' => 'form-control',
                ],
                'placeholder' => 'Ex: 2061237023872679',
            ],
            'helper'     => __('You can create your app in :link',
                ['link' => Html::link('https://developers.facebook.com/apps')]),
        ])
        ->setField([
            'id'         => 'facebook_admins',
            'section_id' => 'opt-text-subsection-facebook-integration',
            'type'       => 'repeater',
            'label'      => __('Facebook Admins'),
            'attributes' => [
                'name'   => 'facebook_admins',
                'value'  => null,
                'fields' => [
                    [
                        'type'       => 'text',
                        'label'      => __('Facebook Admin ID'),
                        'attributes' => [
                            'name'    => 'text',
                            'value'   => null,
                            'options' => [
                                'class'        => 'form-control',
                                'data-counter' => 40,
                            ],
                        ],
                    ],
                ],
            ],
            'helper'     => __('Facebook admins to manage comments :link',
                ['link' => Html::link('https://developers.facebook.com/docs/plugins/comments')]),
        ]);

    add_filter(THEME_FRONT_HEADER, function ($html) {
        if (theme_option('facebook_app_id')) {
            $html .= Html::meta(null, theme_option('facebook_app_id'), ['property' => 'fb:app_id'])->toHtml();
        }

        if (theme_option('facebook_admins')) {
            foreach (json_decode(theme_option('facebook_admins'), true) as $facebookAdminId) {
                if (Arr::get($facebookAdminId, '0.value')) {
                    $html .= Html::meta(null, Arr::get($facebookAdminId, '0.value'), ['property' => 'fb:admins'])
                        ->toHtml();
                }
            }
        }

        return $html;
    }, 1180);

    add_filter(THEME_FRONT_FOOTER, function ($html) {
        return $html . Theme::partial('facebook-integration');
    }, 1180);        
});
