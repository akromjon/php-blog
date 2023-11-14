<?php

namespace App\Livewire;

use App\Models\Post;
use App\Service\TagService;
use Livewire\Component;
use Livewire\WithPagination;
class PostList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTag = '';
    public function render()
    {
        $this->searchTag = $this->searchTag ? $this->searchTag : request()->query('tag');

        $posts = Post::with(['categories', 'user', 'media']);

        if ($this->searchTag && $this->searchTag != 'all-tags') {
            $posts->whereHas('tags', function ($query) {
                $query->where('slug', $this->searchTag);
            });
        }

        $posts=$posts
            ->active()
            ->orderBy('id', 'desc')
            ->paginate(20);



        return view('livewire.post-list', [
            'posts' => $posts,
        ]);
    }

    public function filterByTag(string $tagSlug)
    {
        $this->searchTag = $tagSlug;

        $this->dispatch('urlChanged', '?' . http_build_query(['tag' => $tagSlug]));
    }
}
