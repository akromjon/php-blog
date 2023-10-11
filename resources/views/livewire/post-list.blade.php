<div>


    <section class="doc_blog_grid_area">
        <div class="blog_grid_inner bg_color">
            <div class="container">
                @include('includes.tag-list-in-post')
            </div>
        </div>
        <div class="container">
            <div class="row blog_grid_tab">
                @foreach ($posts as $key => $post)
                    @if (PostService::get()[0]->id != $post->id)
                        <div class="col-lg-4 col-sm-6">
                            <div class="blog_grid_post wow fadeInUp">
                                <img width="400px" height="300px" class="p_img"
                                    src="{{ $post->getFirstMediaUrl('featured') }}"
                                    alt="post image: {{ $post->title }}">
                                <div class="grid_post_content">
                                    <a href="{{ route('post.show', $post->slug) }}">
                                        <h3 title="post title: {{ $post->title }}">{{ $post->title }}</h3>
                                    </a>
                                    <div class="post_category">
                                    @empty(!$post->user)
                                        <a href="{{ route('post.show', $post->slug) }}"
                                            title="Author: {{ $post->user->name }}">By
                                            {{ $post->user->name }}</a>
                                    @endempty
                                    <a href="{{ route('post.show', $post->slug) }}">{{ $post->fCreated }}</a>
                                    <a href="{{ route('post.show', $post->slug) }}">{{ $post->read_duration }} Min
                                        Read</a>
                                    @foreach ($post->categories as $key => $cat)
                                        <a class="c_blue" href="{{ route('category.show', $cat->slug) }}"
                                            title="Category: {{ $cat->title }}">{{ $cat->title }}</a>
                                    @endforeach
                                </div>
                                <p>{!! $post->limitedContentForLower !!}</p>
                                <a title="Continue Reading" href="{{ route('post.show', $post->slug) }}"
                                    class="learn_btn">Continue
                                    Reading<i class="arrow_right"></i></a>

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <br>
        {{ $posts->links() }}
    </div>


</section>
@section('livewireCustomScripts')
    <script>
        Livewire.on('urlChanged', (param) => {
            history.pushState(null, null, param)
        });
    </script>
@endsection

</div>
