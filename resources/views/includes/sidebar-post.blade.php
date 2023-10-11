<div class="widget recent_news_widget">
    <h4 class="c_head">Recent Posts</h4>
    @foreach ($globalPosts as $key => $post)
        <div class="media recent_post_item">
            <a href="{{ route('post.show', $post->slug) }}"><img width="50px"
                    src="{{ $post->getFirstMediaUrl('featured') }}" alt="post image: {{ $post->title }}"></a>
            <div class="media-body">
                <a href="{{ route('post.show', $post->slug) }}">
                    <h5 class="{{isActive('post.show',$post->slug)}}">{{ $post->title }}</h5>
                </a>
                <div class="entry_post_date">{{ $post->fCreated }}</div>
            </div>
        </div>
    @endforeach
</div>
