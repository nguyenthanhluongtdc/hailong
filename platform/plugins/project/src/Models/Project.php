<?php

namespace Platform\Project\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;

class Project extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_projects';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
