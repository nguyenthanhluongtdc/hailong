<?php
use Platform\Slug\Repositories\Interfaces\SlugInterface;
use Platform\Page\Models\Page;

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

if(!function_exists('get_page_by_reference')) {
    function get_page_by_reference($reference_id) {
        return app(SlugInterface::class)->getFirstBy([
            'reference_id' => $reference_id,
            'reference_type' => Page::class,
        ])->key;
    }
}

add_shortcode('typical-project', 'My block', 'Custom block for me', function() {
    return view('theme.main::views.shortcode.typical-project')->render(); 
});


