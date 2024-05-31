<x-app-layout>

    <section class="text-black-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap flex-col">
            <div class="text-3xl mt-3 text-center pb-5">{{$blog->name}}</div>
            <div class="grid grid-cols-1 rounded w-full">
                <div>
                    <div class="text p-3 pb-0 font-bold text-center">
                        <a class="text-amber-900 hover:underline"
                           href="{{asset('blog/'.$blog->id)}}">{{$blog->name}}</a>
                    </div>
                    <div class="flex items-center justify-center h-screen">
                        <img src="{{asset('storage/'.$blog->picture)}}">
                    </div>
                    <div class="col-span-3">
                        <div class="flex items-center justify-center">
                            <div class="prose m-2 text-center">
                                {!! $blog->description_small!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex items-center justify-center">
                            <div class="prose text-justify rounded bg-base-100 shadow p-2">
                                {!! $blog->description!!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div class="text-justify rounded bg-base-100 shadow p-2 w-2/3 mt-5">
                        @foreach($blog->texts()->orderBy('id', 'DESC')->get() as $text)
                            <div>{!! $text->body !!}</div>
                            <div class="max-w-2xl mx-auto">
                                <div class="carousel w-full">
                                    @foreach($text->pictures()->orderBy('position')->get() as $picture)
                                        <div id="slide{{$text->id}}_{{$loop->iteration}}" class="carousel-item relative w-full">
                                            <div class="text-center w-full">
                                                <img src="{{asset('storage/blogs/'.$picture->picture)}}" class="w-full"/>
                                                <div
                                                    class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                                    @php
                                                        if($loop->iteration == 1){
                                                            $prev = $loop->count;
                                                        }else{
                                                            $prev = $loop->iteration-1;
                                                        }
                                                        if($loop->iteration == $loop->count){
                                                           $next = 1;
                                                        }else{
                                                             $next = $loop->iteration+1;
                                                        }
                                                    @endphp
                                                    <a href="#slide{{$text->id}}_{{$prev}}" class="btn btn-circle">❮</a>
                                                    <a href="#slide{{$text->id}}_{{$next}}" class="btn btn-circle">❯</a>
                                                </div>
                                                <div class="badge badge-ghost">{{$picture->name}}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    </x-app-layout>
