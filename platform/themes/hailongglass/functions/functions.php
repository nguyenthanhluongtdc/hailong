<?php

register_page_template([
    'default' => 'Default',
    'introduce' => 'Introduce',
    'company-info' => 'Company info',
    'introduce-profile' => 'Introduce Profile',
    'products' => 'Products',
    'news' => 'News',
]);

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for hailongglass theme',
]);

RvMedia::setUploadPathAndURLToPublic();
