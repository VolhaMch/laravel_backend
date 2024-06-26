<div
    class=" mt-2 bg-white shadow-xl rounded-lg text-gray-900">
    <div class="rounded-t-lg h-32 overflow-hidden">
        <a href="{{asset('blog/'.optional(optional($feed->blog_text_picture)->blog_text)->blog->id)}}">
            <img class="w-full object-cover" src='{{asset('storage/'.optional(optional($feed->blog_text_picture)->blog_text)->blog->picture)}}' alt='{{optional(optional($feed->blog_text_picture)->blog_text)->blog->name}}'>
        </a>
    </div>
    <div class="mx-auto w-32 h-32 relative -mt-16 border-4 border-white  overflow-hidden">
        <img class="object-cover object-center h-32" src='{{asset('storage/blogs/'.optional($feed->blog_text_picture)->picture)}}' alt='{{optional($feed->blog_text_picture)->name}}'>
    </div>
    <div class="text-center mt-2">
        <b>{!! optional($feed->blog_text_picture)->name !!}</b>
    </div>
    <div class="text-left p-5 mt-2">
        <p class="text-gray-500">
        <span class="font-semibold">
            <a href="{{asset('blog/'.optional(optional($feed->blog_text_picture)->blog_text)->blog->id)}}">
            {{optional(optional($feed->blog_text_picture)->blog_text)->blog->name}}
            </a>
        </span>
            {!! optional(optional($feed->blog_text_picture)->blog)->description_small !!}</p>
    </div>
</div>
