<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
class Tag extends Model
{
    use HasFactory;
    use HasSEO;

    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title: $this->title." - ".config('app.name'),
            description: "Tag",
            image: 'companylogo',
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
