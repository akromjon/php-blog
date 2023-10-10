<div class="f_widget link_widget pl_30 wow fadeInUp" data-wow-delay="0.2s">
    <h3 class="f_title">Categories</h3>
    <ul class="list-unstyled link_list">
        @foreach ($categories as $key => $cat)
            <li><a href="blog-grid.html#">{{$cat->title}}</a></li>
        @endforeach
    </ul>
</div>

