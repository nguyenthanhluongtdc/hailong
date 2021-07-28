<?php

use Platform\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function ($theme) {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme) {
            // Partial composer.
            // $theme->partialComposer('header', function($view) {
            //     $view->with('auth', \Auth::user());
            // });
            // You may use this event to set up your assets.

            $theme->asset()->add('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
            $theme->asset()->add('font-awesome-pro', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
            //sementic css
            $theme->asset()->add('transition', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/transition.min.css');
            $theme->asset()->add('dropdown', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/dropdown.min.css');
            $theme->asset()->add('accordion', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/accordion.min.css');

            //link nay bi dung
            //$theme->asset()->add('semantic', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css');
            
            $theme->asset()->add('aos', 'https://unpkg.com/aos@next/dist/aos.css');
            $theme->asset()->add('splidecss', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css');
            $theme->asset()->usePath()->add('style', 'css/common.css');

            //semantic js
            $theme->asset()->container('header')->add('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
            $theme->asset()->container('header')->add('splidejs', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js');
            // $theme->asset()->container('header')->add('transition', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/transition.min.js');
            $theme->asset()->container('header')->usePath()->add('semantic', 'js/plugins/semantic/semantic.min.js');
            // $theme->asset()->container('header')->add('accordion', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/accordion.min.js');
            $theme->asset()->container('footer')->add('bootstrapjsdelivr', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js');
            $theme->asset()->container('footer')->add('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
            $theme->asset()->container('footer')->add('jqueryvalidate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js');
            $theme->asset()->container('footer')->add('jqueryadditional', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js');
            $theme->asset()->container('footer')->add('aos', 'https://unpkg.com/aos@next/dist/aos.js');
            $theme->asset()->container('footer')->usePath()->add('script', 'js/common.js', [], [], time());
            if (function_exists('shortcode')) {
                $theme->composer(['index', 'page', 'post','products','introduce'], function (\Platform\Shortcode\View\View $view) {
                    $view->withShortcodes();
                });
            }


           
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme) {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
