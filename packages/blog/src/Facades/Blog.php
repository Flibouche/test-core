<?php

declare(strict_types=1);

namespace Blog\Blog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Blog\Blog\Blog
 */
class Blog extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Blog\Blog\Blog::class;
    }
}
