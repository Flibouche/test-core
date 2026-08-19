<?php

declare(strict_types=1);

namespace Blog\Blog\Tests;

use Blog\Blog\BlogServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            BlogServiceProvider::class,
        ];
    }
}
