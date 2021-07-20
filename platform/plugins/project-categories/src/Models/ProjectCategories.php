<?php

namespace Platform\ProjectCategories\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;

class ProjectCategories extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_project_categories';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'images',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
