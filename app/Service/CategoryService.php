<?php
namespace App\Service;

use App\Models\Category;


class CategoryService extends BaseService
{
    public function __construct()
    {
        $this->model = Category::withCount('posts')->orderBy('sort','desc')->get();
    }
}
