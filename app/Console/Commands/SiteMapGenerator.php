<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Service\CategoryService;
use App\Service\PostService;
use App\Service\TagService;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SiteMapGenerator extends Command
{
    protected $signature = 'make:site-map';

    protected $description = 'Generate sitemap';

    public function handle()
    {
        SitemapIndex::create()
            ->add($this->buildByUrl('/', 'sitemaps/other/home.xml'))
            ->add($this->buildIndex(Post::active()->get(), 'sitemaps/post/post.xml'))
            ->add($this->buildIndex(CategoryService::get(), 'sitemaps/category/category.xml'))
            ->add($this->buildIndex(TagService::get(), 'sitemaps/tag/tag.xml'))
            ->add($this->buildByUrl('/privacy-policy', 'sitemaps/other/privacy-policy.xml', Url::CHANGE_FREQUENCY_YEARLY))
            ->writeToFile(public_path('sitemap.xml'));
    }

    private function buildIndex(object $model, string $path): string
    {
        Sitemap::create()
            ->add($model)
            ->writeToFile(public_path($path));

        return $path;
    }

    private function buildByUrl(string $url, string $path, string $frequency = Url::CHANGE_FREQUENCY_ALWAYS): string
    {
        Sitemap::create()
            ->add(
                Url::create($url)
                    ->setPriority(1)
                    ->setChangeFrequency($frequency),
            )
            ->writeToFile(public_path($path));
        return $path;
    }
}
