<?php

declare(strict_types=1);

namespace Blog\Blog;

use Blog\Blog\Console\Commands\BlogCommand;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blog.php', 'blog');

        $this->app->singleton(Blog::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/blog.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blog');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'blog');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/blog.php' => config_path('blog.php'),
        ], ['blog', 'blog-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/blog'),
        ], ['blog', 'blog-views']);

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/blog'),
        ], ['blog', 'blog-lang']);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/blog'),
        ], ['blog', 'blog-assets']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['blog', 'blog-migrations']);

        $this->commands([
            BlogCommand::class,
        ]);
    }
}
