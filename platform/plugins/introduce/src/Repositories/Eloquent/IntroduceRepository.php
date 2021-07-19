<?php

namespace Platform\Introduce\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\Introduce\Repositories\Interfaces\IntroduceInterface;
use Platform\Introduce\Models\Introduce;
use SlugHelper;

class IntroduceRepository extends RepositoriesAbstract implements IntroduceInterface
{

    public function getPageIntroduceByTemplate($template = "")
    {
        $page = app(IntroduceInterface::class)->getFirstBy(['template' => $template], ['*']);

        if (\blank($page)) {
            return '';
        }

        $slug = Slughelper::getSlug(\null, Slughelper::getPrefix(Introduce::class), Introduce::class, $page->id);

        return (SlugHelper::getPrefix(Introduce::class) . '/' . $slug->key) ?? '';
    }
}
