<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Builder;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia, Sitemapable
{
    use HasFactory;
    use InteractsWithMedia;
    use Boot;
    use HasSEO;

    protected $table = 'categories';

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured')->singleFile();
    }
    public function toSitemapTag(): Url|string|array
    {
        return Url::create(route('category.show', $this->slug))
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1);
    }
    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title: $this->title . ' - ' . config('app.name'),
            keywords: $this->meta_keywords,
            description: $this->description,
            image: $this->getFirstMediaUrl('featured'),
            site_name: config('app.name'),
            locale: 'en_US',
            url: route('category.show', $this->slug),
            type: 'article'
        );
    }
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_categories', 'category_id', 'post_id')
            ->where('status', true)
            ->with('media');
    }

    public function scopeActive(Builder $query): void
    {
        $query->where('status', true);
    }

    public static function lastSortNumber(): int
    {
        if (!empty(($category = self::latest()->first()))) {
            return $category->sort + 100;
        }

        return 100;
    }
}
