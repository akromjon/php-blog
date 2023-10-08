<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
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

    private function registerViews(): void {


        view()->composer('includes.nav', function ($view) {
            $view->with('categories',Category::select('id','slug','title')->get());
        });

        view()->composer('includes.latest-post', function ($view) {
            $view->with('post',Post::latest()->with(['categories','user'])->first());
        });

        view()->composer('pages.post.list', function ($view) {
            $view->with('posts',Post::with('categories','user')->get());
        });

        view()->composer('includes.tag-list-in-post', function ($view) {
            $view->with('tags',Tag::select('id','slug','title')->get());
        });
    }
}
