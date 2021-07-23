<?php

return [
    'locations' => [
        'header-menu' => 'Header Navigation',
        'main-menu'   => 'Main Navigation',
        'footer-menu' => 'Footer Navigation',
        'project-categories-menu' => 'Projects menu',
        'introduce-menu' => "Introduce menu",
        'products-menu' => "Products menu",
    ],
    'cache'     => [
        'enabled' => env('CACHE_FRONTEND_MENU', false),
    ],
];