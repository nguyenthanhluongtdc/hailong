<?php

namespace Platform\Kernel\Repositories\Eloquent;

use Platform\Blog\Repositories\Eloquent\PostRepository as BlogPostRepository;
use Platform\Base\Enums\BaseStatusEnum;

/**
 * {@inheritDoc}
 */
class PostRepository extends BlogPostRepository
{
    /**
     * {@inheritDoc}
     */
    public function getListPostLatestPaginate($paginate = 6)
    {
        $data = $this->model
            ->where('status', BaseStatusEnum::PUBLISHED)
            ->whereNotIn('is_featured', [1])
            ->orderBy('created_at', 'desc');

        return $this->applyBeforeExecuteQuery($data)->paginate($paginate);
    }
}
