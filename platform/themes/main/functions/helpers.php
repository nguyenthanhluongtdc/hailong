<?php

use Platform\Kernel\Repositories\Interfaces\PostInterface;

if (!function_exists('get_latest_posts_paginate')) {
    /**
     * @param array $params
     * @return mixed
     */
    function get_latest_posts_paginate($paginate = 6)
    {
        return app(PostInterface::class)->getListPostLatestPaginate($paginate);
    }
}
