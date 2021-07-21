<?php

register_page_template([
    'default' => 'Default',
    'introduce' => 'Introduce',
    'company-info' => 'Company info',
    'introduce-profile' => 'Introduce Profile',
    'teachnological-line' => 'Teachnological line',
    'products' => 'Products',
    'product-price' => 'Product Price',
    'product-detail' => 'Product Detail',
    'warranty-policy' => 'Warranty Policy',
    'policy' => 'Policy',
    'news' => 'News',
    'news-detail' => 'News Detail',
    'projects' => 'Projects',
    'projects-detail' => 'Project Detail',
    'contact' => 'Contact',
]);

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for main theme',
]);

Menu::addMenuLocation('introduce-tabs', 'Danh sách tabs giới thiệu');
RvMedia::setUploadPathAndURLToPublic();
