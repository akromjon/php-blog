<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Str;


class CategoryObserver
{
    public function creating(Category $category): void
    {
        $this->convertToUpper($category);
    }
    public function updating(Category $category): void
    {
        $this->convertToUpper($category);
    }

    private function convertToUpper(Category $category){
        $category->title=Str::upper($category->title);
    }
}
