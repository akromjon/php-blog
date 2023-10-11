<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Post;
class TagController extends Controller
{
    public function __construct(Post $post)
    {
        $this->model = $post;
    }
    public function show(string $slug): View
    {
        $posts = $this->model
            ->whereHas('tags', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->with('categories', 'media', 'user')
            ->orderBy('id', 'desc')
            ->active()
            ->get();

        return view('pages.tag.show', ['posts' => $posts]);
    }
}
