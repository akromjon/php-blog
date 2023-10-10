<?php

namespace App\Observers;

use App\Models\Tag;
use Illuminate\Support\Str;


class TagObserver
{
    public function creating(Tag $tag): void
    {
        $this->convertToUpper($tag);
    }
    public function updating(Tag $tag): void
    {
        $this->convertToUpper($tag);
    }

    private function convertToUpper(Tag $tag){
        $tag->title=Str::upper($tag->title);
    }
}
