<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'publish_date' => 'datetime',
    ];

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

    public function getFCreatedAttribute():string{
        return Carbon::parse($this->attributes['created_at'])->toFormattedDateString();
    }

}
