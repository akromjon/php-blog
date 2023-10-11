<div class="f_widget link_widget pl_30 wow fadeInUp" data-wow-delay="0.2s">
    <h3 class="f_title">Categories</h3>
    <ul class="list-unstyled link_list">
        @foreach ($globalCategories as $key => $cat)
            <li><a class="{{isActive('category.show',$cat->slug)}}" href="{{route('category.show',$cat->slug)}}">{{ $cat->title }}</a></li>
        @endforeach
    </ul>
</div>
