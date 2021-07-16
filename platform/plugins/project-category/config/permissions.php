<?php

return [
    [
        'name' => 'Project categories',
        'flag' => 'project-category.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'project-category.create',
        'parent_flag' => 'project-category.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'project-category.edit',
        'parent_flag' => 'project-category.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'project-category.destroy',
        'parent_flag' => 'project-category.index',
    ],
];
