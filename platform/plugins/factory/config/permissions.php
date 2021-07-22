<?php

return [
    [
        'name' => 'Factories',
        'flag' => 'factory.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'factory.create',
        'parent_flag' => 'factory.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'factory.edit',
        'parent_flag' => 'factory.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'factory.destroy',
        'parent_flag' => 'factory.index',
    ],
];
