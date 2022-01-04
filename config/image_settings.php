<?php
return [
    'folder'               => 'category-image',
    'thumbnail'            => 'thumbnail',
    'allowed_image_types'  => [
        'jpg', 'png', 'jpeg', 'svg',
    ],

    'new_upload_folder'    => 'category_image',
    'product_image_folder' => 'product-image',
    'base_url'             => env( 'APP_URL', '127.0.0.1:8000' ) . '/storage/',
];