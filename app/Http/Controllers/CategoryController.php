<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    public function show(string $slug): View
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = $this->model
            ->whereHas('categories', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->with('categories', 'media', 'user')
            ->orderBy('id', 'desc')
            ->active()
            ->get();

        return view('pages.category.show', ['posts' => $posts, 'category' => $category]);
    }
}
