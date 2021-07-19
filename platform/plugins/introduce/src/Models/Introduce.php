<?php

namespace Platform\Introduce\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\Slug\Traits\SlugTrait;

class Introduce extends BaseModel
{
    use EnumCastable, SlugTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_introduces';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'template',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
