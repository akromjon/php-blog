
@empty(!$post=isset($globalPosts[0]) ? $globalPosts[0] : "")
<section class="blog_top_post_area sec_pad bg_color">
    <div class="container">
        <div class="row blog_top_post flex-row-reverse">
            <div class="col-lg-7 p_top_img">
                <img class="p_img" src="{{$post->getFirstMediaUrl('featured')}}" alt="post image: {{$post->title}}">
            </div>
            <div class="col-lg-5 p-0">
                <div class="b_top_post_content">
                    <a href="{{route('post.show',$post->slug)}}">
                        <h3 title="post title: {{$post->title}}">{{$post->title}}</h3>
                    </a>
                    <div class="post_category">
                        @empty(!$post->user)
                            <a href="{{route('post.show',$post->slug)}}" title="Author: {{$post->user->name}}">By {{$post->user->name}}</a>
                        @endempty
                        <a href="{{route('post.show',$post->slug)}}">{{ $post->fCreated }}</a>
                        <a href="{{route('post.show',$post->slug)}}">{{$post->read_duration}} Min Read</a>
                        @foreach($post->categories as $key => $cat)
                            <a class="c_blue" href="{{route('post.show',$post->slug)}}" title="Category: {{$cat->title}}">{{$cat->title}}</a>
                        @endforeach
                    </div>
                    <p>{!!$post->limitedContent!!}</p>
                    <a title="Continue Reading" href="{{route('post.show',$post->slug)}}" class="learn_btn">Continue Reading<i class="arrow_right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endempty
