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

    public $oldSearch = '';

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
                Post::active()
                    ->where('slug', 'like', '%' . $this->search . '%')
                    ->orWhere('content', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%')
                    ->with('media'),
                ['id', 'title', 'content', 'slug', 'status', 'description'],
                'created_at',
            )
                ->add(
                    Category::active()
                        ->where('title', 'like', '%' . $this->search . '%')
                        ->orWhere('description', 'like', '%' . $this->search . '%'),
                    ['title', 'status', 'slug'],
                )
                ->add(Tag::where('title', 'like', '%' . $this->search . '%'), ['title', 'slug'])
                ->orderByModel([Post::class, Category::class, Tag::class])
                ->paginate($this->per_page)
                ->search($this->search);
        }

        return view('livewire.global-search', ['results' => $results]);
    }

    public function loadMore($per_page)
    {
        $this->per_page = $this->per_page+$per_page;
    }
}
