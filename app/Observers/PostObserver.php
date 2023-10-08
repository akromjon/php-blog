<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;
class PostObserver
{
    public function creating(Post $post): void
    {
        $this->contentMeta($post);
    }

    public function updating(Post $post): void
    {
        $this->contentMeta($post);
    }

    private function contentMeta(Post $post): void
    {
        $content = strip_tags(str_replace('<', ' <', $post->content));

        $post->word_count = Str::wordCount($content);

        $post->read_duration = Str::readDuration($content);
    }
}
