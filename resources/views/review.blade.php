<x-app-layout>

@if (session('status'))
    <div class="toast toast-top toast-end" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
        <div class="alert alert-success">
            Thank you! <br />
            {{ session('status') }}
        </div>
    </div>
@endif
{{--<div class="grid grid-cols-4 m-2 bg-base">Потом раскомментировать--}}

{{--    <div class="col-span-4 md:col-span-3 order-2 md:order-1 bg-white rounded-lg border shadow p-6">--}}
{{--        <div class="text-3xl text-center">Отзывы с сайта</div>--}}
{{--        <div>--}}
{{--            @foreach($reviews as $lead)--}}
{{--                <div class="border-b border-gray-300 p-3">--}}
{{--                    <div>{{$lead->message}}</div>--}}
{{--                    <div><b>{{$lead->name}}</b> {{$lead->created_at->diffForHumans()}}</div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-3">
        <div class="content-center text-grey font-bold text-center text-3xl mt-10 md:text-4xl">Let's make something great together!
            <div class="hidden md:block"> <i class="fa-solid fa-right-long"></i></div>
            <div class="mt-8 md:hidden"> <i class="fa-solid fa-down-long"></i> </div>
        </div>
<div>
    <div class="pt-8 md:pt-28">
        <div class="text-4xl font-semibold pb-5 text-center">{{__('menu.get_in_touch')}}</div>
    </div>
                    <form action="{{asset('review/')}}" method="post" class="flex flex-col">
                        @csrf

                        <label for="name" class="block">
                            <span class="text-gray-700">{{__('menu.your_name')}}</span>
                            <input class="block w-full mt-1 form-input" required name="name" id="name" type="text" autocomplete="off">
                        </label>
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                        <label for="email" class="block mt-4">
                            <span class="text-gray-700">{{__('menu.your_email')}}</span>
                            <input class="block w-full mt-1 form-input" required name="email" id="email" autocomplete="off" type="email">
                        </label>
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                        <label for="phone" class="block mt-4">
                            <span class="text-gray-700">{{__('menu.phone_number')}}</span>
                            <input class="block w-full mt-1 form-input" required name="phone" id="phone" autocomplete="off" type="tel">
                        </label>
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->


                        <label class="block mt-4 md:col-span-2">
                            <span class="text-gray-700">{{__('menu.message')}}</span>
                            <textarea class="block w-full mt-1 form-textarea" required name="message" rows="4" placeholder=""></textarea>
                        </label>
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        <input type="hidden" name="preferred" value="отзыв">
                        <button type="submit" class="px-4 py-2 mt-8 font-semibold text-gray-800 bg-white border border-gray-300 rounded shadow hover:bg-gray-100">
                            {{__('menu.send')}}
                        </button>
                    </form>
</div>

{{--            </div>--}}



</div>
</x-app-layout>
