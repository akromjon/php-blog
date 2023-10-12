<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
class Post extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;

    use HasSEO;

    protected $casts = [
        'publish_date' => 'datetime',
    ];

    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title: $this->title." - ".config('app.name'),
            description: $this->description,
            image: $this->getFirstMediaUrl('featured'),
            site_name: config('app.name'),
            locale: "en_US",
            url: route("post.show",$this->slug),
            type:'article',
        );
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured')->singleFile(); // just define it here
    }

    public function scopeActive(Builder $query): void
    {
        $query->where('status', true);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'post_categories', 'post_id', 'category_id')->orderBy('sort','desc');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function getLimitedContentAttribute(): string
    {
        return Str::words(strip_tags(str_replace('<', ' <', $this->attributes['content'])), 100, $end = '...');
    }

    public function getLimitedContentForLowerAttribute(): string
    {
        return Str::limit(strip_tags(str_replace('<', ' <', $this->attributes['content'])), 150, $end = '...');
    }

    public function getFCreatedAttribute(): string
    {
        return Carbon::parse($this->attributes['created_at'])->toFormattedDateString();
    }


}
