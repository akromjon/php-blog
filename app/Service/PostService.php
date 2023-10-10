<?php
namespace App\Service;
use App\Models\Post;
class PostService extends BaseService
{
    public function __construct()
    {
        $this->model = Post::with('categories', 'user')
            ->orderBy('id', 'desc')
            ->active()
            ->take(5)
            ->get();
    }
}
