<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Tag extends Model implements Sitemapable,HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use Boot;
    use HasSEO;


    public function toSitemapTag(): Url | string | array
    {
        return Url::create(route('tag.show', $this->slug))
        ->setLastModificationDate(Carbon::create($this->updated_at))
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        ->setPriority(0.1);
    }

    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title: $this->title." - ".config('app.name'),
            keywords: $this->meta_keywords,
            description: $this->description,
            image: !empty($this->getFirstMediaUrl('featured')) ? $this->getFirstMediaUrl('featured') : nova_get_setting('logo'),
            site_name: config('app.name'),
            locale: "en_US",
            url: route("tag.show",$this->slug),
            type:'article',
        );
    }

    public function posts(): BelongsToMany{
        return $this->belongsToMany(Post::class,'post_tags','tag_id','post_id');
    }
}
