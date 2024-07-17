<x-app-layout>

    <section class="text-black-600 body-font">
        <div class="breadcrumbs text-sm">
            <ul>
                <li>Блог</li>
                <li>{{ $blog->name}}</li>
            </ul>
        </div>
        <div class="container px-5 py-24 mx-auto flex flex-wrap flex-col">

            <div class="text-3xl mt-3 text-center pb-5">
                @include('includes.stars', ['model_name'=>'Blog', 'model_id'=>$blog->id, 'model'=>$blog])

            <div class="grid grid-cols-1 rounded w-full">

                <div>

                    <div class="text p-3 pb-0 font-bold text-center">

                    <a class="text-amber-900 hover:underline"
                           href="{{asset('blog/'.$blog->id)}}">{{$blog->name}}

                    </a>



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
                        <div class="text-lg flex items-center justify-center">
                            <div class="text-justify rounded bg-base-100 shadow p-2 mb-4">
                                {!! $blog->description!!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center flex-wrap ">
                    <a class="text-indigo-500 text-sm hover:text-gray-400 inline-flex items-center md:mb-2 lg:mb-0"
                       href="{{asset('blogs')}}">
                        <--Назад к блогу
                    </a>
                </div>

                <div class="flex items-center justify-center">
                    <div class="text-justify rounded bg-base-100 shadow p-2 w-full mt-5">


<div class="flex flew-row justify-between">
                        <div class="text-lg ml-2">Комментарии:</div>
    <div class="text-lg mr-4">
        @if (auth()->guest())
            <a href="{{ route('login') }}" class="btn btn-primary">Sign in to comment</a>
        @endif
    </div>
</div>
                        <form method="post" action="{{asset('blog/'.$blog->id.'/add_comment')}}">
                            @csrf
                            <input class="input input-info" type="text" name="user_name" placeholder="Имя"
                                    value="{{Auth::guest()?'':Auth::user()->name}}"/><br>
                            <textarea name="message" class="textarea textarea-bordered textarea-lg w-full max-w-xs" placeholder="Оставьте комментарий"></textarea><br>
                            <button class="btn">Отправить</button>
                        </form>
{{--                        <div class="text-lg">Читать ещё: карусель</div>--}}


{{--                @foreach($blog->texts()->orderBy('id', 'DESC')->get() as $text)--}}
{{--                            <div>{!! $text->body !!}</div>--}}

{{--                    <div class="max-w-2xl mx-auto">--}}
{{--                                <div class="carousel w-full">--}}

{{--                                    @foreach($text->pictures()->orderBy('position')->get() as $picture)--}}
{{--                                        <div id="slide{{$text->id}}_{{$loop->iteration}}" class="carousel-item relative w-full">--}}
{{--                                            <div class="text-center w-full">--}}
{{--                                                <img src="{{asset('storage/blogs/'.$picture->picture)}}" class="w-full"/>--}}
{{--                                                <div--}}
{{--                                                    class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">--}}
{{--                                                    @php--}}
{{--                                                        if($loop->iteration == 1){--}}
{{--                                                            $prev = $loop->count;--}}
{{--                                                        }else{--}}
{{--                                                            $prev = $loop->iteration-1;--}}
{{--                                                        }--}}
{{--                                                        if($loop->iteration == $loop->count){--}}
{{--                                                           $next = 1;--}}
{{--                                                        }else{--}}
{{--                                                             $next = $loop->iteration+1;--}}
{{--                                                        }--}}
{{--                                                    @endphp--}}
{{--                                                    <a href="#slide{{$text->id}}_{{$prev}}" class="btn btn-circle">❮</a>--}}
{{--                                                    <a href="#slide{{$text->id}}_{{$next}}" class="btn btn-circle">❯</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="badge badge-ghost">{{$picture->name}}</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}

                    </div>

                </div>
            </div>
        </div>
            @foreach($comments as $comment)
                <div class="border rounded-md p-3 ml-3 my-3">
                    <div class="flex gap-3 items-center">
                        <h3 class="font-bold">
                            {{$comment->user_name}}
                        </h3>
                    </div>
                    <p class="text-gray-600 mt-2">
                        {{$comment->message}}
                    </p>
                    <p class="float-right">
                        <em>{{$comment->created_at->diffForHumans()}}</em>
                    </p>
                </div>
        @endforeach
    </section>


</x-app-layout>
