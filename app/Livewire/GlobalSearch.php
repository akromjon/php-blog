<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;

use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class GlobalSearch extends Component
{
    #[Url]
    public $search = '';

    public string $oldSearch = '';

    public $per_page = 10;

    public function render()
    {
        $results = [];

        if ($this->search != $this->oldSearch) {
            $this->per_page = 10;
        }

        if ($this->search) {
            $this->oldSearch = $this->search;
        }

        if ($this->search) {
            $results = Search::add(
                Post::where('slug', 'like', "%{$this->search}%")
                    ->orWhere('content', 'like', "%{$this->search}%")
                    ->orWhere('slug', 'like', "%{$this->search}%")
                    ->with('media'),
                ['title', 'content', 'slug'],
            )
                ->add(Category::where('title', 'like', "%$this->search%"), ['title', 'slug'])
                ->add(Tag::where('title', 'like', "%$this->search%"), ['title', 'slug'])
                ->orderByModel([Post::class, Category::class, Tag::class])
                ->paginate($perPage = $this->per_page)
                ->search($this->search);
        }

        return view('livewire.global-search', ['results' => $results]);
    }

    public function loadMore($per_page)
    {
        $this->per_page = +(int) $per_page;
    }
}
