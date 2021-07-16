<?php

namespace Platform\Ecommerce\Services\Products;

use Platform\Ecommerce\Models\Product;
use Platform\Ecommerce\Repositories\Eloquent\ProductAttributeRepository;
use Platform\Ecommerce\Repositories\Eloquent\ProductRepository;
use Platform\Ecommerce\Repositories\Eloquent\ProductVariationRepository;
use Platform\Ecommerce\Repositories\Interfaces\ProductAttributeInterface;
use Platform\Ecommerce\Repositories\Interfaces\ProductInterface;
use Platform\Ecommerce\Repositories\Interfaces\ProductVariationInterface;

class CreateProductVariationsService
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * @var ProductAttributeRepository
     */
    protected $productAttributeRepository;

    /**
     * @var ProductVariationRepository
     */
    protected $productVariationRepository;

    /**
     * CreateProductVariationsService constructor.
     * @param ProductInterface $product
     * @param ProductAttributeInterface $productAttribute
     * @param ProductVariationInterface $productVariation
     */
    public function __construct(
        ProductInterface $product,
        ProductAttributeInterface $productAttribute,
        ProductVariationInterface $productVariation
    ) {
        $this->productRepository = $product;

        $this->productAttributeRepository = $productAttribute;

        $this->productVariationRepository = $productVariation;
    }

    /**
     * @param Product $product
     * @return array
     */
    public function execute(Product $product)
    {
        $attributeSets = $product->productAttributeSets()->allRelatedIds()->toArray();

        $attributes = $this->productAttributeRepository
            ->advancedGet([
                'condition' => [['attribute_set_id', 'IN', $attributeSets]],
            ]);

        $data = [];

        foreach ($attributeSets as $attributeSet) {
            $data[] = $attributes
                ->where('attribute_set_id', $attributeSet)
                ->pluck('id')
                ->toArray();
        }

        $variationsInfo = $this->combinations($data);

        $variations = [];
        foreach ($variationsInfo as $value) {
            $result = $this->productVariationRepository->getVariationByAttributesOrCreate($product->id, $value);
            $variations[] = $result['variation'];
        }

        return $variations;
    }

    /**
     * @param array $array
     * @return array|array[]
     */
    protected function combinations(array $array): array
    {
        $result = [[]];

        foreach ($array as $key => $value) {
            $tmp = [];
            foreach ($result as $item) {
                foreach ($value as $valueItem) {
                    $tmp[] = array_merge($item, [$key => $valueItem]);
                }
            }
            $result = $tmp;
        }

        return $result;
    }
}
