<?php

namespace RalphJSmit\Laravel\SEO\Tags;

use RalphJSmit\Laravel\SEO\Support\MetaTag;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class KeywordsTag extends MetaTag
{
    public static function initialize(?SEOData $SEOData): MetaTag|null
    {
        $keywords = $SEOData?->keywords;

        if ( ! $keywords ) {
            return null;
        }

        return new MetaTag(
            name: 'keywords',
            content: trim($keywords)
        );
    }
}
