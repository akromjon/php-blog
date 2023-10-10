<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Tag;
use App\Service\CategoryService;
use App\Service\PostService;
use App\Service\TagService;
use Illuminate\Support\Facades\Cache;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerSingletons();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->registerStr();
        $this->registerViews();
    }

    private function registerStr(): void {

        Str::macro('readDuration', function(...$text) {
            return (int)max(1, round(str_word_count(implode(" ", $text)) / 200));
        });


    }

    private function registerSingletons(): void{

        $this->app->singleton(CategoryService::class,function($app){
            return new CategoryService();
        });
        $this->app->singleton(PostService::class,function($app){
            return new PostService();
        });

        $this->app->singleton(TagService::class,function($app){
            return new TagService();
        });

    }

    private function registerViews(): void {


        view()->composer(['includes.nav','includes.footer-categories'], function ($view) {
            $view->with('categories',CategoryService::get());
        });

        view()->composer(['includes.latest-post','includes.footer-posts'], function ($view) {
            $view->with('posts',PostService::get());
        });

        view()->composer('includes.tag-list-in-post', function ($view) {
            $view->with('tags',TagService::get());
        });
    }
}
