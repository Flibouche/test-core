<?php

declare(strict_types=1);

use Blog\Blog\Blog;

it('resolves the singleton', function () {
    expect(app(Blog::class))->toBeInstanceOf(Blog::class);
});

it('returns the same instance from the container', function () {
    expect(app(Blog::class))->toBe(app(Blog::class));
});

it('merges the package config', function () {
    expect(config('blog.placeholder'))->toBe('default');
});

it('loads the package translations', function () {
    expect(trans('blog::messages.placeholder'))->toBe('Blog placeholder translation.');
});

it('loads the package views', function () {
    expect(view()->exists('blog::placeholder'))->toBeTrue();
});

it('registers the artisan command', function () {
    $this->artisan('blog:placeholder')
        ->expectsOutputToContain('Blog placeholder command executed.')
        ->assertSuccessful();
});
