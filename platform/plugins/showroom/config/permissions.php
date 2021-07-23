<?php

return [
    [
        'name' => 'Showrooms',
        'flag' => 'showroom.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'showroom.create',
        'parent_flag' => 'showroom.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'showroom.edit',
        'parent_flag' => 'showroom.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'showroom.destroy',
        'parent_flag' => 'showroom.index',
    ],
];
