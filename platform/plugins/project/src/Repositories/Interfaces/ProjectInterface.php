<?php

namespace Platform\Project\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface ProjectInterface extends RepositoryInterface
{
    public function getByCategory($categoryId, $paginate = 12, $limit = 0);
    public function getProject($projectId);
    public function getAllProject($paginate);
}
