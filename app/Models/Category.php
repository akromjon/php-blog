<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Contracts\Database\Eloquent\Builder;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_categories', 'category_id', 'post_id')->where('status',true)->with('media');
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
