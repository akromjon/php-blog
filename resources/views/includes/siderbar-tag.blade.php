<div class="widget tag_widget">
    <h4 class="c_head">Tags</h4>
    <ul class="list-unstyled w_tag_list">
        @foreach ($globalTags as $key => $tag)
            <li><a class="{{isActive('tag.show',$tag->slug)}}" href="{{route('tag.show',$tag->slug)}}">{{$tag->title}}</a></li>
        @endforeach
    </ul>
</div>
