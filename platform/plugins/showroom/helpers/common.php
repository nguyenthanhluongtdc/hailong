<?php

use Platform\Showroom\Repositories\Interfaces\ShowroomInterface;
use Platform\Showroom\Supports\Region;

if (!function_exists('get_showrooms')) {
    /**
     * Get showroom function
     *
     * @return void
     */
    function get_showrooms()
    {
        return app(ShowroomInterface::class)->advancedGet([
            "created_at" => [
                "id" => "asc",
            ],
            'select'    => ['*']
        ]);
    }
}

if (!function_exists('get_regions')) {
    /**
     * Get regions function
     */
    function get_regions()
    {
        return Region::getRegions(true);
    }
}
