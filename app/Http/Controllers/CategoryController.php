<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    public function show(string $slug): View
    {
        $category = $this->model
            ->where('slug', $slug)
            ->active()
            ->with('posts')
            ->firstOrFail();

        return view('pages.category.show', ['category' => $category]);
    }
}
