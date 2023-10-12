<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Post;
use App\Models\Tag;

class TagController extends Controller
{
    public function __construct(Post $post)
    {
        $this->model = $post;
    }
    public function show(string $slug): View
    {
        $tag=Tag::where('slug',$slug)->firstOrFail();
        $posts = $this->model
            ->whereHas('tags', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->with('categories', 'media', 'user')
            ->orderBy('id', 'desc')
            ->active()
            ->get();

        return view('pages.tag.show', ['posts' => $posts,'tag'=>$tag]);
    }
}
