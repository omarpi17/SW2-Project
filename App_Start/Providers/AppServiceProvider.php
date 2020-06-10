<?php

namespace App\Providers;

use App\Repositories\EloquentPost;
use App\Repositories\PostRepository;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // EloquentPost autoloads when we load the PostRepository interface
        $this->app->singleton(PostRepository::class, EloquentPost::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
