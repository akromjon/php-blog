<div class="widget categorie_widget">
    <h4 class="c_head">Category</h4>
    <ul class="list-unstyled categorie_list">
        @foreach ($globalCategories as $key => $cat)
            <li><a class="{{isActive('category.show',$cat->slug)}}" href="{{ route('category.show', $cat->slug) }}">{{ $cat->title }}
                    <span>({{ $cat->posts_count }})</span></a></li>
        @endforeach

    </ul>
</div>
