<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function __construct(Post $post)
    {
        $this->model = $post;
    }
    public function show(string $slug): View
    {

        $post = Cache::rememberForever('post.show.' . $slug, function () use ($slug) {
            return $this->model
                ->where('slug', $slug)
                ->with('categories', 'media','user',)
                ->firstOrFail();
        });

        return view('pages.post.show', ['post' => $post]);
    }
}
