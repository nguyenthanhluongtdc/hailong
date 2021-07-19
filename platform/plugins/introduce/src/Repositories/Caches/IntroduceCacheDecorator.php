<?php

namespace Platform\Introduce\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\Introduce\Repositories\Interfaces\IntroduceInterface;

class IntroduceCacheDecorator extends CacheAbstractDecorator implements IntroduceInterface
{
    public function getPageIntroduceByTemplate($template)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
