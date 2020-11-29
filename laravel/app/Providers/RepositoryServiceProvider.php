<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\ContentInterface;
use App\Repositories\ContentRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(ContentInterface::class, ContentRepostiory::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

}

