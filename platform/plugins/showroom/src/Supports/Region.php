<?php

namespace Platform\Showroom\Supports;

class Region
{
    /**
     * @param bool $isConvertToList
     * @return array
     * @since 16-09-2016
     */
    public static function getRegions($isConvertToList = false)
    {
        return [
            'north' => trans("plugins/showroom::showroom.north"),
            'central' => trans("plugins/showroom::showroom.central"),
            'south' => trans("plugins/showroom::showroom.south"),
        ];
    }
}
