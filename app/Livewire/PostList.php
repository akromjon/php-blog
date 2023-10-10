<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use App\Service\PostService;
class PostList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.post-list', ['posts' => Post::active()->orderBy('id','desc')->paginate(3)]);
    }
}
