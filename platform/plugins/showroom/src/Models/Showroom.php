<?php

namespace Platform\Showroom\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;

class Showroom extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_showrooms';

    /**
     * @var array
     */
    protected $fillable = [
        'address',
        'phones',
        'url_google_map',
        'region',
        'is_factory',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
