<?php

namespace Platform\ProjectCategories\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\Project\Models\Project;
use Platform\Slug\Traits\SlugTrait;

class ProjectCategories extends BaseModel
{
    use EnumCastable, SlugTrait;

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

    /**
     * @return BelongsToMany
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_categories')->with('slugable');
    }
}
