<?php

return [
    'Cart\\Model\\CartItem' => [
        'fields' => [
            'variant' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => true
                ],
                'index' => 3100
            ]
        ]
    ],
    'Purchase\\Model\\PurchaseProduct' => [
        'fields' => [
            'variant' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => true
                ],
                'index' => 3100
            ]
        ]
    ],
    'ProductVariant\\Model\\ProductVariant' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'product' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 3000
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [
                    'null' => false
                ],
                'index' => 4000
            ],
            'image' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [],
                'index' => 5000
            ],
            'price' => [
                'type' => 'DOUBLE',
                'length' => '13,2',
                'attrs' => [
                    'unsigned' => true
                ],
                'index' => 6000
            ],
            'status' => [
                'type' => 'TINYINT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false,
                    'default' => 1
                ],
                'index' => 7000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ]
];
