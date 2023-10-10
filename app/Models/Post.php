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
class Post extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;

    protected $casts = [
        'publish_date' => 'datetime',
    ];

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
        return $this->belongsToMany(Category::class, 'post_categories', 'post_id', 'category_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function getLimitedContentAttribute(): string
    {
        return Str::limit(strip_tags(str_replace('<', ' <', $this->attributes['content'])), 250, $end = '...');
    }

    public function getLimitedContentForLowerAttribute(): string
    {
        return Str::limit(strip_tags(str_replace('<', ' <', $this->attributes['content'])), 150, $end = '...');
    }

    public function getFCreatedAttribute(): string
    {
        return Carbon::parse($this->attributes['created_at'])->toFormattedDateString();
    }

    public function getImageWithStorageAttribute(): string
    {
        if (filter_var($this->attributes['image'], FILTER_VALIDATE_URL) !== false) {
            return $this->attributes['image'];
        }

        return '/storage/' . $this->attributes['image'];
    }
}
