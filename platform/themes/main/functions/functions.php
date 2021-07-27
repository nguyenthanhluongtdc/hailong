<?php

use Platform\Slug\Repositories\Interfaces\SlugInterface;
use Platform\Page\Models\Page;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Ecommerce\Repositories\Interfaces\ProductInterface;
use Illuminate\Support\Facades\DB;

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
RvMedia::addSize('news_home_featured', 250, 160)
    ->addSize('news_featured', 600, 270)
    ->addSize('news_thumbnail', 272, 183)
    ->addSize('project_home_featured', 410, 440)
    ->addSize('project_featured', 550, 400);

if (!function_exists('get_slug_by_reference')) {
    function get_slug_by_reference($reference_id)
    {
        $slug =  app(SlugInterface::class)->getFirstBy([
            'reference_id' => $reference_id,
            'reference_type' => Page::class,
        ]);

        if (!$slug) {
            return "";
        }
        return $slug->key;
    }
}

if (!function_exists('get_page_by_id')) {
    function get_page_by_id($id)
    {
        if ($id) {
            $page = Page::where('id', $id)->first();
            return $page->count() ? $page : [];
        }
    }
}

if (!function_exists('get_price_notification_products')) {
    /**
     * @param array $params
     * @return mixed
     */
    function get_price_notification_products(array $params = [], $limit = 9)
    {
        $params = array_merge([
            'condition' => [
                // 'ec_products.is_price_notification'  => 1,
                'ec_products.is_variation' => 0,
                'ec_products.status'       => BaseStatusEnum::PUBLISHED,
            ],
            'take'      => $limit,
            'order_by'  => [
                'ec_products.created_at' => 'DESC',
            ],
            'select'    => ['ec_products.*'],
            'with'      => ['productAttributeSets'],
        ], $params);

        return app(ProductInterface::class)->advancedGet($params);
    }
}

if (!function_exists('get_other_products')) {
    /**
     * Get other products of $product
     * @param Product $product
     * @param int $limit
     * @return array
     */
    function get_other_products($product)
    {
        $params = [
            'condition' => [
                'ec_products.status'       => BaseStatusEnum::PUBLISHED,
                'ec_products.is_variation' => 0,
            ],
            'order_by'  => [
                'ec_products.order'      => 'ASC',
                'ec_products.created_at' => 'DESC',
            ],
            'take'      => null,
            'select'    => [
                'ec_products.*',
            ],
            'with'      => [
                'slugable',
                'variations',
                'productCollections',
                'variationAttributeSwatchesForProductList',
                'promotions',
            ],
        ];

        try {
            $relatedIds = $product->otherProducts()->allRelatedIds()->toArray();
        } catch (Exception $exception) {
            return [];
        }

        if (!empty($relatedIds)) {
            $params['condition'][] = ['ec_products.id', 'IN', $relatedIds];
        } else {
            $params['condition'][] = ['ec_products.id', '!=', $product->id];
        }

        return app(ProductInterface::class)->getProducts($params);
    }
}

add_shortcode('typical-project', 'My block', 'Custom block for me', function () {
    return view('theme.main::views.shortcode.typical-project')->render();
});
