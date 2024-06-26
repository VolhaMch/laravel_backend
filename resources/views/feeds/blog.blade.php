<article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 mt-4 mb-4">
    <img src="{{asset('storage/'.$feed->blog->picture)}}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
    <a class="z-10 mt-3 text-3xl font-bold text-white">
        <a href="asset{{'blog/'.$feed->blog->id}}"
    {{$feed->blog->name}}
    </a>
    </h3>
    <div class="z-10 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">{{$feed->blog->description_small}}</div>
</article>
