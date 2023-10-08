<section class="doc_blog_grid_area">
    <div class="blog_grid_inner bg_color">
        <div class="container">
            @include('includes.tag-list-in-post')
        </div>
    </div>
    <div class="container">
        <div class="row blog_grid_tab">
            @foreach ($posts as $key => $post)
                <div class="col-lg-4 col-sm-6">
                    <div class="blog_grid_post wow fadeInUp">
                        <img width="400px" height="300px" class="p_img" src="{{asset('storage/'.$post->image)}}" alt="post image: {{$post->title}}">
                        <div class="grid_post_content">
                            <a href="blog-grid.html#">
                                <h3 title="post title: {{$post->title}}">{{$post->title}}</h3>
                            </a>
                            <div class="post_category">
                                @empty(!$post->user)
                                    <a href="blog-grid.html#" title="Author: {{$post->user->name}}">By {{$post->user->name}}</a>
                                @endempty
                                <a href="blog-grid.html#">{{$post->fCreated}}</a>
                                <a href="blog-grid.html#">{{$post->read_duration}} Min Read</a>
                                @foreach($post->categories as $key => $cat)
                                    <a class="c_blue" href="blog-grid.html#" title="Category: {{$cat->title}}">{{$cat->title}}</a>
                                @endforeach
                            </div>
                            <p>{!!$post->limitedContentForLower!!}</p>
                            <a title="Continue Reading" href="blog-grid.html#" class="learn_btn">Continue Reading<i class="arrow_right"></i></a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
