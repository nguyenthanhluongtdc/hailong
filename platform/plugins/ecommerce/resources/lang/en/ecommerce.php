<?php

return [
    'settings'                        => 'Settings',
    'name'                            => 'Ecommerce',
    'setting'                         => [
        'email'                                 => [
            'title'                                   => 'E-commerce',
            'description'                             => 'Ecommerce email config',
            'order_confirm_subject'                   => 'Subject of order confirmation email',
            'order_confirm_subject_placeholder'       => 'The subject of email confirmation send to the customer',
            'order_confirm_content'                   => 'Content of order confirmation email',
            'order_status_change_subject'             => 'Subject of email when changing order\'s status',
            'order_status_change_subject_placeholder' => 'Subject of email when changing order\'s status send to customer',
            'order_status_change_content'             => 'Content of email when changing order\'s status',
            'from_email'                              => 'Email from',
            'from_email_placeholder'                  => 'Email from address to display in mail. Ex: example@gmail.com',
        ],
        'title'                                 => 'Basic information',
        'state'                                 => 'State',
        'city'                                  => 'City',
        'country'                               => 'Country',
        'select country'                        => 'Select a country...',
        'weight_unit_gram'                      => 'Gram (g)',
        'weight_unit_kilogram'                  => 'Kilogram (kg)',
        'height_unit_cm'                        => 'Centimeter (cm)',
        'height_unit_m'                         => 'Meter (m)',
        'store_locator_title'                   => 'Store locators',
        'store_locator_description'             => 'All the lists of your chains, main stores, branches, etc. The locations can be used to track sales and to help us configure tax rates to charge when selling products.',
        'phone'                                 => 'Phone',
        'address'                               => 'Address',
        'is_primary'                            => 'Primary?',
        'add_new'                               => 'Add new',
        'or'                                    => 'Or',
        'change_primary_store'                  => 'change default store locator',
        'other_settings'                        => 'Other settings',
        'other_settings_description'            => 'Settings for cart, review...',
        'enable_cart'                           => 'Enable shopping cart?',
        'enable_tax'                            => 'Enable tax?',
        'display_product_price_including_taxes' => 'Display product price including taxes?',
        'enable_review'                         => 'Enable review?',
        'enable_quick_buy_button'               => 'Enable quick buy button?',
        'quick_buy_target'                      => 'Quick buy target page?',
        'checkout_page'                         => 'Checkout page',
        'cart_page'                             => 'Cart page',
        'add_location'                          => 'Add location',
        'edit_location'                         => 'Edit location',
        'delete_location'                       => 'Delete location',
        'change_primary_location'               => 'Change primary location',
        'delete_location_confirmation'          => 'Are you sure you want to delete this location? This action cannot be undo.',
        'save_location'                         => 'Save location',
        'accept'                                => 'Accept',
        'select_country'                        => 'Select country',
        'zip_code_enabled'                      => 'Enable Zip Code?',
        'thousands_separator'                   => 'Thousands separator',
        'decimal_separator'                     => 'Decimal separator',
        'separator_period'                      => 'Period (.)',
        'separator_comma'                       => 'Comma (,)',
        'separator_space'                       => 'Space ( )',
        'available_countries'                   => 'Available countries',
        'all'                                   => 'All',
        'verify_customer_email'                 => "Verify customer's email?",
        'minimum_order_amount'                  => 'Minimum order amount to place an order (:currency).',
        'enable_guest_checkout'                 => 'Enable guest checkout?',
    ],
    'store_address'                   => 'Store address',
    'store_phone'                     => 'Store phone',
    'order_id'                        => 'Order ID',
    'order_token'                     => 'Order token',
    'customer_name'                   => 'Customer name',
    'customer_email'                  => 'Customer email',
    'customer_phone'                  => 'Customer phone',
    'customer_address'                => 'Customer address',
    'product_list'                    => 'List products in order',
    'payment_detail'                  => 'Payment detail',
    'shipping_method'                 => 'Shipping method',
    'payment_method'                  => 'Payment method',
    'standard_and_format'             => 'Standard & Format',
    'standard_and_format_description' => 'Standards and formats are used to calculate things like product prices, shipping weights, and order times.',
    'change_order_format'             => 'Edit order code format (optional)',
    'change_order_format_description' => 'The default order code starts at: number. You can change the start or end string to create the order code you want, for example "DH-: number" or ": number-A"',
    'start_with'                      => 'Start with',
    'end_with'                        => 'End with',
    'order_will_be_shown'             => 'Your order code will be shown',
    'weight_unit'                     => 'Unit of weight',
    'height_unit'                     => 'Unit length / height',
    'theme_options'                   => [
        'name'                         => 'Ecommerce',
        'description'                  => 'Theme options for Ecommerce',
        'number_products_per_page'     => 'Number of products per page',
        'number_of_cross_sale_product' => 'Number of cross sale products in product detail page',
        'max_price_filter'             => 'Maximum price to filter',
        'logo_in_the_checkout_page'    => 'Logo in the checkout page (Default is the main logo)',
        'logo_in_invoices'             => 'Logo in invoices (Default is the main logo)',
    ],
];
