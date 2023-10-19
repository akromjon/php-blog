<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    public function show(string $slug): View
    {
        // $category = Cache::rememberForever('category.show.' . $slug, function () use ($slug) {
            $category = Category::where('slug', $slug)->firstOrFail();
        // });

        $posts = Cache::rememberForever('category.show.withposts' . $slug, function () use ($slug) {
            return $this->model
                ->whereHas('categories', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                })
                ->with('categories', 'media', 'user')
                ->orderBy('id', 'desc')
                ->active()
                ->get();
        });

        return view('pages.category.show', ['posts' => $posts, 'category' => $category]);
    }
}
