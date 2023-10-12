<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Contracts\Database\Eloquent\Builder;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
class Category extends Model
{
    use HasFactory;
    use HasSEO;

    protected $table = 'categories';

    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title: $this->title." - ".config('app.name'),
            description: "Category",
            image: 'companylogo',
            site_name: config('app.name'),
            locale: "en_US",
            url: route("category.show",$this->slug),
            type:'article',
        );
    }
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
