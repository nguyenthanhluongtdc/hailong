<?php

app()->booted(function () {
    add_shortcode('google-map', __('Google map'), __('Custom map'), function ($shortCode) {
        return Theme::partial('shortcodes.google-map', ['address' => $shortCode->content]);
    });

    shortcode()->setAdminConfig('google-map', Theme::partial('shortcodes.google-map-admin-config'));

    add_shortcode('youtube', __('Youtube'), __('Add youtube video'), function ($shortCode) {
        $url = rtrim($shortCode->content, '/');
        if (str_contains($url, 'watch?v=')) {
            $url = str_replace('watch?v=', 'embed/', $url);
        } else {
            $exploded = explode('/', $url);

            if (count($exploded) > 1) {
                $url = 'https://www.youtube.com/embed/' . Arr::last($exploded);
            }
        }

        return Theme::partial('shortcodes.youtube', compact('url'));
    });

    shortcode()->setAdminConfig('youtube', Theme::partial('shortcodes.youtube-admin-config'));

    if (is_plugin_active('showroom')) {
        add_shortcode('showrooms', __("Showrooms"), __("Add showrooms"), function ($shortCode) {
            return Theme::partial('shortcodes.showrooms', [
                'title' => $shortCode->title,
                'description' => $shortCode->description,
                'title_factory' => $shortCode->title_factory,
                'description_factory' => $shortCode->description_factory
            ]);
        });
    }

    add_shortcode('shoppingguide', __("Shoppingguide"), __("Add shoppingguide"), function () {
        return Theme::partial('shortcodes.shoppingguide');
    });
});
