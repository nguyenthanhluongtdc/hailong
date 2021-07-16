<?php

namespace Platform\Project\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\Slug\Traits\SlugTrait;
use Platform\Revision\RevisionableTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Platform\ServicesCategory\Models\ServicesCategory;
use Platform\Slug\Repositories\Interfaces\SlugInterface;


class Project extends BaseModel
{
    use EnumCastable;
    use RevisionableTrait;
    use SlugTrait;

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
        'projects_category',
        'description',
        'type',
        'image',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectsCategory::class, 'projects_category', 'id')->withDefault();
    }

}
