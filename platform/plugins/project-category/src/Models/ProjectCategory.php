<?php

namespace Platform\ProjectCategory\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\Slug\Traits\SlugTrait;
use Platform\Layout\Models\Project;

class ProjectCategory extends BaseModel
{
    use EnumCastable;
    use SlugTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_projects_categories';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'projects_category', 'id');
    }
}
