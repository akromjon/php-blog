<ul class="nav blog_tab">
    <li class="nav-item">
        <a class="nav-link active" href="blog-grid.html#">All Tags</a>
    </li>
    @foreach($tags as $key => $tag)
        <li class="nav-item cat-woocommerce">
            <a title="Tag: {{$tag->title}}" class="nav-link" href="blog-grid.html#">{{$tag->title}}</a>
        </li>
    @endforeach


</ul>
