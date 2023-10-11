<?php
namespace App\Service;
use App\Models\Post;
class PostService extends BaseService
{
    public function __construct()
    {
        $this->model =
            Post::orderBy('id', 'desc')
            ->active()
            ->with('media')
            ->take(5)
            ->get();
    }
}
