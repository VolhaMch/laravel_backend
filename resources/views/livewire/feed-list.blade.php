<div>
    @foreach($feeds as $feed)

        @switch($feed->model_name)
            @case('Blog')
                @include('feeds.blog')

                @break
            @case('BlogText')
                @include('feeds.blog_text')

                @break
            @case('BlogTextPicture')
                @include('feeds.blog_text_picture')

                @break
            @case('Review')
                @include('feeds.review')

                @break
            @case('Service')
                @include('feeds.service')

                @break
        @endswitch
    @endforeach
        @if($canLoadMore)
            <a class="w-full p-2 m-2 text-center cursor-auto" wire:click="loadMore">Load more</a>
        @endif
</div>
