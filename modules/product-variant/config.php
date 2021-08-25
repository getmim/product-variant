<?php

return [
    '__name' => 'product-variant',
    '__version' => '0.0.1',
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
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
