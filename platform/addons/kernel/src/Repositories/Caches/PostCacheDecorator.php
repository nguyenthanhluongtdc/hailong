<?php

namespace Platform\Kernel\Repositories\Caches;

use Platform\Blog\Repositories\Caches\PostCacheDecorator as BlogPostCacheDecorator;

/**
 * {@inheritDoc}
 * 
 * @desc Em extends lại class gốc rồi đặt Alias cho nó trước khi dùng, vì bị trùng.
 * @desc Về  p/a thì dùng cách này để kế thừa tránh đụng vào core, a ko rõ sao tới mức gì mà lại phải viết vào trong core mấy cái hàm như thế.
 */
class PostCacheDecorator extends BlogPostCacheDecorator
{
    /**
     * {@inheritDoc}
     */
    public function getListPostLatestPaginate($paginate = 6)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
