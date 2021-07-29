<?php

return [
    [
        'name' => 'Project categories',
        'flag' => 'project-categories.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'project-categories.create',
        'parent_flag' => 'project-categories.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'project-categories.edit',
        'parent_flag' => 'project-categories.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'project-categories.destroy',
        'parent_flag' => 'project-categories.index',
    ],
];
