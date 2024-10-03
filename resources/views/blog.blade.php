<x-app-layout>


    <section class="text-black-600 body-font">
{{--comment message--}}
        @if (session('status'))
            <div class="toast toast-top toast-end" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
                <div class="alert alert-success">
                    Thank you! <br />
                    {{ session('status') }}
                </div>
            </div>
        @endif

        <div class="breadcrumbs text-sm">

            <ul>
                <li class="hover:underline"><a href="{{asset('blogs')}}">{{__('menu.blog')}}</a></li>
                <li>{{ $blog->name}}</li>
            </ul>
        </div>

        <div class="container px-5 py-24 mx-auto flex flex-wrap flex-col">
{{--            Favorites--}}
            <div>
            @if(auth()->check())
                @if(auth()->user()->favorites->contains('blog_id', $blog->id))

                        <a href="/favorite/{{$blog->id}}/delete" type="submit" class="text-indigo-600 hover:underline">
                            <i class="fa-solid fa-bookmark"></i>{{__('menu.favorites_remove')}}
                        </a>
                @else
                        <a href="/favorite/{{$blog->id}}" type="submit" class="text-indigo-600 hover:underline">
                            <i class="fa-regular fa-bookmark"></i>{{__('menu.favorites_add')}}
                        </a>
                @endif
            @endif
            </div>
            <div class="text-3xl mt-3 text-center pb-5">
                {{--like--}}
                @include('includes.stars', ['model_name'=>'Blog', 'model_id'=>$blog->id, 'model'=>$blog])
                <div class="grid grid-cols-1 rounded w-full">
                    <div>
                        <div class="text p-3 pb-0 font-bold text-center mb-6">

                            <a class="text-amber-900 text-indigo-600 hover:underline"
                               href="{{asset('blog/'.$blog->id)}}">{{$blog->name}}

                            </a>
                        </div>
                        <div class="flex mx-auto items-center justify-center w-full max-w-sm md:max-w-md">
                            <img src="{{asset('storage/'.$blog->picture)}}">
                        </div>

                        <div class="col-span-3">
                            <div class="flex items-center justify-center">
                                <div class="prose m-2 text-center text-sm">
                                    {!! $blog->description_small!!}
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="grid grid-row place-items-start text-sm   md:grid-cols-3">
                        <div class="mb-4 mt-2 md:justify-self-start">{!! $blog->tags!!}</div>
                            <div class="mb-4 md:justify-self-end">{!! $blog->minutes!!}</div>
                            <div class="mb-2 md:justify-self-center"> {{__('menu.posted')}} {!! $blog->posted!!}</div>
                        </div>
                        <div class="col-span-3">
                            <div class="sm:grid sm:grid-cols-1 text-sm mt-2 md:grid-cols-[1fr_5fr] gap-2 mt-4">
                                <div class="self-start md:sticky top-0">
                                    <p class="text-base font-bold">{{ __('menu.content') }}:</p>
                                    <ul class="text-sm">
                                        <li><a href="#section1" class="hover:underline">{!! $blog->content_1 !!}</a></li>
                                        <li><a href="#section2" class="hover:underline">{!! $blog->content_2 !!}</a></li>
                                        <li><a href="#section3" class="hover:underline">{!! $blog->content_3 !!}</a></li>
                                        <li><a href="#section4" class="hover:underline">{!! $blog->content_4 !!}</a></li>
                                    </ul>
                                </div>
                                <div class="text-justify  rounded bg-base-100 shadow p-2 mb-4 text-sm md:text-base">
                                    {!! $blog->description!!}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="flex items-center flex-wrap">
                        <a class="text-indigo-500 text-sm m-4 hover:text-gray-400 inline-flex items-center md:mb-2 lg:mb-0"
                           href="{{asset('blogs')}}">
                            <i class="fa-solid fa-arrow-left-long">{{__('menu.back_to_blog') }}</i>
                        </a>
                    </div>
                          {{--комментарии--}}
                    <div class="flex items-center justify-center">
                        <div class="text-justify rounded bg-base-100 shadow p-2 w-full mt-5">


                            <div class="flex flew-row justify-between">
                                <div class="text-base ml-2 lg:text-lg">{{__('menu.leave_comment') }}</div>
                                <div class="text-base mr-4 mb-2 lg:text-lg">
                                    @if (auth()->guest())
                                        <a href="{{ route('login') }}" class="btn btn-primary">{{__('menu.sign_in') }}</a>
                                    @endif
                                </div>
                            </div>
                            <form method="post" action="{{asset('blog/'.$blog->id.'/add_comment')}}">
                                @csrf
                                <input class="input input-info mb-2" type="text" name="user_name" placeholder="{{__('menu.your_name') }}"
                                       value="{{Auth::guest()?'':Auth::user()->name}}"/><br>
                                <textarea name="message" class="textarea textarea-bordered textarea-lg w-full max-w-xs"
                                          placeholder="{{__('menu.your_comment') }}"></textarea><br>
                                <button class="btn">{{__('menu.send') }}</button>
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
                <div class="border rounded-md p-3  my-3">
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
            @if (session('status'))
                <div class="toast toast-top toast-end" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
                    <div class="alert alert-success">
                        Thank you! <br />
                        {{ session('status') }}
                    </div>
                </div>
        @endif

    </section>


</x-app-layout>
