<?php

return [
    [
        'name' => 'Projects',
        'flag' => 'project.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'project.create',
        'parent_flag' => 'project.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'project.edit',
        'parent_flag' => 'project.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'project.destroy',
        'parent_flag' => 'project.index',
    ],
];
