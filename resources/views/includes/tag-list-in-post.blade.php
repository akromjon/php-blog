<ul class="nav blog_tab">
    <li class="nav-item" id="tag">
        <a class="nav-link {{$searchTag=='all-tags' ? 'active' : ''}}" wire:click="filterByTag('all-tags')">All Tags</a>
    </li>
    @foreach ($globalTags as $key => $tag)
        <li class="nav-item cat-woocommerce">
            <a title="Tag: {{ $tag->title }}" class="nav-link {{$searchTag==$tag->slug ? 'active' : ''}}"
                wire:click="filterByTag('{{ $tag->slug }}')">{{ $tag->title }}</a>
        </li>
    @endforeach
</ul>
