<?php

return [
    [
        'name' => 'Factory addresses',
        'flag' => 'factory-address.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'factory-address.create',
        'parent_flag' => 'factory-address.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'factory-address.edit',
        'parent_flag' => 'factory-address.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'factory-address.destroy',
        'parent_flag' => 'factory-address.index',
    ],
];
