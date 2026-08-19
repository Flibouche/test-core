<?php

declare(strict_types=1);

namespace Blog\Blog\Console\Commands;

use Illuminate\Console\Command;

class BlogCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'blog:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package blog.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('Blog placeholder command executed.');

        return self::SUCCESS;
    }
}
