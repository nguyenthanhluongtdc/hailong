<?php
use Platform\Introduce\Repositories\Interfaces\IntroduceInterface;

if (!function_exists('get_slug_introduce_by_template')) {
    /**
     * @param $template
     * @return mixed
     *
     */
    function get_slug_introduce_by_template($template)
    {
        return app(IntroduceInterface::class)->getPageIntroduceByTemplate($template);
    }
}