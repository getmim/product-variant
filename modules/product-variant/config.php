<?php

return [
    '__name' => 'product-variant',
    '__version' => '0.2.0',
    '__git' => 'git@github.com:getmim/product-variant.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-variant' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product' => NULL
            ],
            [
                'lib-enum' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ProductVariant\\Model' => [
                'type' => 'file',
                'base' => 'modules/product-variant/model'
            ]
        ],
        'files' => []
    ],
    'libEnum' => [
        'enums' => [
            'product-variant.status' => [
                0 => 'Deleted',
                1 => 'Active'
            ]
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'product-variant' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'product' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Product\\Model\\Product',
                        'field' => 'id'
                    ],
                    'format' => 'product'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'image' => [
                    'type' => 'media'
                ],
                'price' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'status' => [
                    'type' => 'enum',
                    'enum' => 'product-variant.status'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'cart-item' => [
                'variant' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'ProductVariant\\Model\\ProductVariant',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'product-variant'
                ]
            ],
            'purchase-product' => [
                'variant' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'ProductVariant\\Model\\ProductVariant',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'product-variant'
                ]
            ]
        ]
    ]
];
