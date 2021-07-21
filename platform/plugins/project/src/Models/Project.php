<?php

namespace Platform\Project\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\ProjectCategories\Models\ProjectCategories;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        'description',
        'content',
        'images',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    public function categories() : BelongsToMany{
        return $this->belongsToMany(ProjectCategories::class, 'app_project_category_project','project_id','category_id');
    }
}
