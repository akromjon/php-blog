<div class="f_widget link_widget pl_70 wow fadeInUp" data-wow-delay="0.6s">
    <h3 class="f_title">Recent Posts</h3>
    <ul class="list-unstyled link_list">
        @foreach ($posts as $key => $post)
            <li><a href="doclist.html">{{$post->title}}</a></li>
        @endforeach
    </ul>
</div>
