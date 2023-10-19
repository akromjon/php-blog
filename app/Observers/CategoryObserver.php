<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Str;


class CategoryObserver
{
    public function creating(Category $category): void
    {
    }
    public function updating(Category $category): void
    {
    }

    private function convertToUpper(Category $category){
        $category->title=Str::upper($category->title);
    }
}
