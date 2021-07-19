<?php

return [
    [
        'name' => 'Introduces',
        'flag' => 'introduce.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'introduce.create',
        'parent_flag' => 'introduce.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'introduce.edit',
        'parent_flag' => 'introduce.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'introduce.destroy',
        'parent_flag' => 'introduce.index',
    ],
];
