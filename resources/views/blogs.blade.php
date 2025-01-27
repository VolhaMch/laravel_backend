<x-app-layout>
    @section('title', 'Blog')

    @section('meta')
        <meta name="description" content="Читать последние статьи  в моём блоге, посвещенному маркетингу в сфере ИТ.">
        <meta name="keywords" content="блог, маркетинг, ИТ, сделки, продажи, лидогенерация, инновации, лид, заказчик, проект, технологии">
    @endsection
    <section class="body-font">
        <div class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 ml-6 sm:px-6 lg:px-8">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">{{__('menu.blog')}}</h1>
            </div>
        </div>
        <div class="container px-5 py-24 mx-auto">

            <div class="flex flex-wrap -m-4">
                @foreach($blogs as $blog)
                    <div class="p-4 md:w-1/3 relative">
                        @include('includes.stars', ['model_name'=>'Blog', 'model_id'=>$blog->id, 'model'=>$blog])

                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">

                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                 src="{{asset('storage/'.$blog->picture)}}" alt="blog">

                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $blog->status}}</h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $blog->name}}</h1>
                                <p class="leading-relaxed mb-3">{{$blog->description_small}}</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 hover:text-gray-400 inline-flex items-center md:mb-2 lg:mb-0"
                                       href="{{asset('blog/'.$blog->id.'?title='.Str::slug($blog->name))}}">
                                        {{__('menu.learn_more')}} -->>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    </x-app-layout>

<!-- JSON-LD Script -->
<script type="application/ld+json">
                    {
                        "@context": "https://schema.org",
                        "@type": "BlogPosting",
                        "headline": "{{ $blog->name }}",
                        "description": "{{ $blog->description_small }}",
                        "author": {
                            "@type": "Person",
                            "name": "Machys Volha"
                        },
                        "image": "{{ asset('storage/'.$blog->picture) }}",
{{--                        "datePublished": "{{ $blog->created_at->toISO8601String() }}"--}}
                    }
                    </script>
