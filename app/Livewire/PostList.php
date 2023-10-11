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

        $posts = Post::whereHas('tags', function ($query) {
            if ($this->searchTag && $this->searchTag != 'all-tags') {
                $query->where('slug', $this->searchTag);
            }
        })
            ->with(['categories', 'user', 'media'])
            ->active()
            ->orderBy('id', 'desc')
            ->paginate(10);

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
