<div class="f_widget link_widget pl_70 wow fadeInUp" data-wow-delay="0.6s">
    <h3 class="f_title">Recent Posts</h3>
    <ul class="list-unstyled link_list">
        @foreach ($globalPosts as $key => $post)
            <li><a class="{{isActive('post.show',$post->slug)}}" href="{{route('post.show',$post->slug)}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
</div>
