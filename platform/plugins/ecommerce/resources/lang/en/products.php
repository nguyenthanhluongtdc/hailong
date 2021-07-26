<?php

return [
    'name'                                           => 'Products',
    'create'                                         => 'New product',
    'edit'                                           => 'Edit product - :name',
    'form'                                           => [
        'name'                               => 'Name',
        'name_placeholder'                   => 'Product\'s name (Maximum 120 characters)',
        'description'                        => 'Description',
        'description_placeholder'            => 'Short description for product (Maximum 400 characters)',
        'categories'                         => 'Categories',
        'content'                            => 'Content',
        'price'                              => 'Price',
        'quantity'                           => 'Quantity',
        'brand'                              => 'Brand',
        'width'                              => 'Width',
        'height'                             => 'Height',
        'weight'                             => 'Weight',
        'is_price_notification'              => 'Price notification',
        'date'                               => [
            'end'   => 'From date',
            'start' => 'To date',
        ],
        'image'                              => 'Images',
        'collections'                        => 'Product collections',
        'labels'                             => 'Labels',
        'price_sale'                         => 'Price sale',
        'product_type'                       => [
            'title' => 'Product type',
        ],
        'product'                            => 'Product',
        'total'                              => 'Total',
        'sub_total'                          => 'Subtotal',
        'shipping_fee'                       => 'Shipping fee',
        'discount'                           => 'Discount',
        'options'                            => 'Options',
        'shipping'                           => [
            'height' => 'Height',
            'length' => 'Length',
            'title'  => 'Shipping',
            'weight' => 'Weight',
            'wide'   => 'Wide',
        ],
        'stock'                              => [
            'allow_order_when_out' => 'Allow customer checkout when this product out of stock',
            'in_stock'             => 'In stock',
            'out_stock'            => 'Out stock',
            'title'                => 'Stock status',
        ],
        'storehouse'                         => [
            'no_storehouse' => 'No storehouse management',
            'storehouse'    => 'With storehouse management',
            'title'         => 'Storehouse',
            'quantity'      => 'Quantity',
        ],
        'tax'                                => 'Tax',
        'is_default'                         => 'Is default',
        'action'                             => 'Action',
        'restock_quantity'                   => 'Restock quantity',
        'remain'                             => 'Remain',
        'choose_discount_period'             => 'Choose Discount Period',
        'cancel'                             => 'Cancel',
        'no_results'                         => 'No results!',
        'value'                              => 'Value',
        'attribute_name'                     => 'Attribute name',
        'add_more_attribute'                 => 'Add more attribute',
        'continue'                           => 'Continue',
        'add_new_attributes'                 => 'Add new attributes',
        'add_new_attributes_description'     => 'Adding new attributes helps the product to have many options, such as size or color.',
        'create_product_variations'          => ':link to create product variations!',
        'tags'                               => 'Tags',
        'write_some_tags'                    => 'Write some tags',
        'variation_existed'                  => 'This variation is existed.',
        'no_attributes_selected'             => 'No attributes selected!',
        'added_variation_success'            => 'Added variation successfully!',
        'updated_variation_success'          => 'Updated variation successfully!',
        'created_all_variation_success'      => 'Created all variations successfully!',
        'updated_product_attributes_success' => 'Updated product attributes successfully!',
        'stock_status'                       => 'Stock status',
        'auto_generate_sku'                  => 'Auto generate SKU?',
    ],
    'price'                                          => 'Price',
    'quantity'                                       => 'Quantity',
    'type'                                           => 'Type',
    'image'                                          => 'Thumbnail',
    'sku'                                            => 'SKU',
    'brand'                                          => 'Brand',
    'cannot_delete'                                  => 'Product could not be deleted',
    'product_deleted'                                => 'Product deleted',
    'product_collections'                            => 'Product collections',
    'products'                                       => 'Products',
    'menu'                                           => 'Products',
    'control'                                        => [
        'button_add_image' => 'Add image',
    ],
    'price_sale'                                     => 'Sale price',
    'price_group_title'                              => 'Manager product price',
    'store_house_group_title'                        => 'Manager store house',
    'shipping_group_title'                           => 'Manager shipping',
    'overview'                                       => 'Overview',
    'attributes'                                     => 'Attributes',
    'product_has_variations'                         => 'Product has variations',
    'manage_products'                                => 'Manage products',
    'add_new_product'                                => 'Add a new product',
    'start_by_adding_new_product'                    => 'Start by adding new products.',
    'edit_this_product'                              => 'Edit this product',
    'delete'                                         => 'Delete',
    'related_products'                               => 'Related products',
    'other_products'                                 => 'Other products',
    'cross_selling_products'                         => 'Cross-selling products',
    'up_selling_products'                            => 'Up-selling products',
    'grouped_products'                               => 'Grouped products',
    'search_products'                                => 'Search products',
    'selected_products'                              => 'Selected products',
    'edit_variation_item'                            => 'Edit',
    'variations_box_description'                     => 'Click on "Edit attribute" to add/remove attributes of variation or click on "Add new variation" to add variation.',
    'save_changes'                                   => 'Save changes',
    'continue'                                       => 'Continue',
    'edit_attribute'                                 => 'Edit attribute',
    'select_attribute'                               => 'Select attribute',
    'add_new_variation'                              => 'Add new variation',
    'edit_variation'                                 => 'Edit variation',
    'generate_all_variations'                        => 'Generate all variations',
    'generate_all_variations_confirmation'           => 'Are you sure you want to generate all variations for this product?',
    'delete_variation'                               => 'Delete variation?',
    'delete_variation_confirmation'                  => 'Are you sure you want to delete this variation? This action cannot be undo.',
    'delete_variations_confirmation'                 => 'Are you sure you want to delete those variations? This action cannot be undo.',
    'product_create_validate_name_required'          => 'Please enter product\'s name',
    'product_create_validate_sale_price_max'         => 'The discount must be less than the original price',
    'product_create_validate_sale_price_required_if' => 'Must enter a discount when you want to schedule a promotion',
    'product_create_validate_end_date_after'         => 'End date must be after start date',
    'product_create_validate_start_date_required_if' => 'Discount start date cannot be left blank when scheduling is selected',
    'product_create_validate_sale_price'             => 'Discounts cannot be left blank when scheduling is selected',
    'stock_statuses'                                 => [
        'in_stock'     => 'In stock',
        'out_of_stock' => 'Out of stock',
        'on_backorder' => 'On backorder',
    ],
    'stock_status'                                   => 'Stock status',
    'processing'                                     => 'Processing...',
    'delete_selected_variations'                     => 'Delete selected variations',
    'delete_variations'                              => 'Delete variations',
];
