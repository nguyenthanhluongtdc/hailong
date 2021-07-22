<?php

namespace Platform\FactoryAddress\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;

class FactoryAddress extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_factory_addresses';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'phone_01',
        'phone_02',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
