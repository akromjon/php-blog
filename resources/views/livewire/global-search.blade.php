<div>
    <div  class="banner_search_form">
        <input wire:model.live="search" type="search" class="form-control" placeholder='Live Search: categories, posts, tags'>
        <button type="submit"><i class="icon_search"></i></button>
        <div class="instant-results">
            @if (count($results))
                <ul class="list-unstyled result-bucket">
                    @foreach ($results as $key => $model)
                        @if (class_basename($model) == 'Post')
                            <li class="result-entry">
                                <a href="{{ route('post.show', $model->slug) }}" class="result-link">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ $model->getFirstMediaUrl('featured') }}"
                                                alt="post image: {{ $model->title }}" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">{{ $model->title }}</h4>
                                            <p>Post</p>
                                        </div>
                                    </div>
                                </a>

                            </li>
                        @endif
                        @if (class_basename($model) == 'Category')
                            <li class="result-entry">
                                <a href="{{ route('category.show', $model->slug) }}" class="result-link">
                                    <div class="media">
                                        <div class="media-left">
                                            {{-- <img src="{{ $model->getFirstMediaUrl('featured') }}"
                                                alt="post image: {{ $model->title }}" class="media-object"> --}}
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">{{ $model->title }}</h4>
                                            <p>Category</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endif

                        @if (class_basename($model) == 'Tag')
                            <li class="result-entry">
                                <a href="{{ route('tag.show', $model->slug) }}" class="result-link">
                                    <div class="media">
                                        <div class="media-left">
                                            {{-- <img src="{{ $model->getFirstMediaUrl('featured') }}"
                                                alt="post image: {{ $model->title }}" class="media-object"> --}}
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">{{ $model->title }}</h4>
                                            <p>Tag</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endif
                    @endforeach
                    @if (!$results->onLastPage())
                        <li wire:click="loadMore(10)" class="load_more">
                            <a class="result-link">
                                Load More...
                            </a>
                        </li>
                    @endif
                </ul>
            @endif
        </div>
    </div>
</div>
