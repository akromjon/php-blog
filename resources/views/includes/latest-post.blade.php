
@empty(!$post=isset($posts[0]) ? $posts[0] : $posts)
<section class="blog_top_post_area sec_pad bg_color">
    <div class="container">
        <div class="row blog_top_post flex-row-reverse">
            <div class="col-lg-7 p_top_img">
                <img class="p_img" src="{{$post->getFirstMediaUrl('featured')}}" alt="post image: {{$post->title}}">
            </div>
            <div class="col-lg-5 p-0">
                <div class="b_top_post_content">
                    <a href="blog-grid.html#">
                        <h3 title="post title: {{$post->title}}">{{$post->title}}</h3>
                    </a>
                    <div class="post_category">
                        @empty(!$post->user)
                            <a href="blog-grid.html#" title="Author: {{$post->user->name}}">By {{$post->user->name}}</a>
                        @endempty
                        <a href="blog-grid.html#">{{ $post->fCreated }}</a>
                        <a href="blog-grid.html#">{{$post->read_duration}} Min Read</a>
                        @foreach($post->categories as $key => $cat)
                            <a class="c_blue" href="blog-grid.html#" title="Category: {{$cat->title}}">{{$cat->title}}</a>
                        @endforeach
                    </div>
                    <p>{!!$post->limitedContent!!}</p>
                    <a title="Continue Reading" href="blog-grid.html#" class="learn_btn">Continue Reading<i class="arrow_right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endempty
