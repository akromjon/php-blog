<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function __construct(Post $post)
    {
        $this->model = $post;
    }
    public function show(string $slug): View
    {
        $post = $this->model
            ->where('slug', $slug)
            ->with('categories', 'media')
            ->firstOrFail();

        return view('pages.post.show', ['post' => $post]);
    }
}
