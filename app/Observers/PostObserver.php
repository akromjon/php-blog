<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class PostObserver
{
    public function creating(Post $post): void
    {
        $this->contentMeta($post);

        if($post->image==null){
            $post->image="https://static.vecteezy.com/system/resources/thumbnails/004/141/669/small/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg";
        }
        $post->user_id=Auth::user()->id;
    }

    public function updating(Post $post): void
    {
        $this->contentMeta($post);

        if($post->image==null){
            $post->image="https://static.vecteezy.com/system/resources/thumbnails/004/141/669/small/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg";
        }
    }

    private function contentMeta(Post $post): void
    {
        $content = strip_tags(str_replace('<', ' <', $post->content));

        $post->word_count = Str::wordCount($post->description." ".$content);

        $post->read_duration = Str::readDuration($content);
    }
}
