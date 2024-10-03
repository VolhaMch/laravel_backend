<x-app-layout>
    @section('title', 'Case studies')

    @section('meta')
        <meta name="description" content="Примеры успешно приведенных проектов">
        <meta name="keywords" content="лидогенерация, лиды, проеты, ИТ">
    @endsection
    <div class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 ml-6 sm:px-6  lg:px-8">
        <h1 class="font-semibold text-xl  text-gray-800 leading-tight mb-4">{{__('menu.cases.message_3') }}</h1>
    </div>
    </div>

    <div class="mt-2 ml-6"  x-data="{ open: false }">
        <div><div @click="open = !open"  class="mt-2 ml-8 hover:text-gray-500"><i class="fa-solid fa-arrow-down">{{__('menu.cases.message_4') }}</i></button></div>
        <div x-show="open">
        <p class="m-2  text-md text-start lg:text-base">{{__('menu.cases.message_1') }}</p>
        <p class="m-2 italic text-sm text-start lg:text-md">{{__('menu.cases.message_2') }}</p>
    </div>
    </div>
{{--    cards --}}
        <div class="carousel w-full mt-8 mx-4 pt-2  shadow shadow-2xl bg-zinc-100">

        <div id="item1" class="grid grid-col-1 carousel-item w-full">

{{--            picture--}}
            <div class="row-span-1">
                <div class="text-center text-2xl"><p class="text-blue-500">{{__('menu.technologies') }}</p> <p>{{__('menu.cases.consulting') }}</p></div>
                <img class="mt-10 max-w-xs mx-auto" src="/img/itconsulting.jpg">
            </div>
            {{--           text     --}}

{{--            mobile--}}
            <div class="row-span-2 text-xl md:hidden">
                <hr>
                <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.1_card_customer1') }}</p>
                <p class="text-blue-500">{{__('menu.requirements') }}</p> <p class="pb-4">{{__('menu.cases.1_card_requirment1') }}</p>
                <hr>
                <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.1_card_customer2') }}</p>
                <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.1_card_requirment2') }}</p>
                <hr>
                <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.1_card_customer3') }}</p>
                <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.1_card_requirment3') }}</p>
                <hr>
            </div>
{{--            desktop--}}
                    <div class="hidden md:grid grid-cols-2 text-lg ml-2">
                        <div>
                        <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.1_card_customer1') }}</p>
                            <hr>
                            <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.1_card_customer3') }}</p>
                        <hr>
                            <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.1_card_customer2') }}</p>
                        </div>
                        <div>
                    <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.1_card_requirment1') }}</p>
                            <hr>
                            <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.1_card_requirment3') }}</p>
                        <hr>
                     <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.1_card_requirment2') }}</p>
                        </div>
                        </div>
            </div>

        <div id="item2" class="grid grid-col-1 carousel-item w-full">

            {{--            picture--}}
            <div class="row-span-1">
                <div class="text-center text-2xl"><p class="text-blue-500">{{__('menu.technologies') }}</p> <p>{{__('menu.cases.cybersecurity') }}</p></div>
                <img class="mt-10 max-w-xs mx-auto" src="/img/cybersecurity.jpg">
            </div>
            {{--           text     --}}

            {{--            mobile--}}
            <div class="row-span-2 text-xl md:hidden">
                <hr>
                <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.2_card_customer1') }}</p>
                <p class="text-blue-500">{{__('menu.requirements') }}</p> <p class="pb-4">{{__('menu.cases.2_card_requirment1') }}</p>
                <hr> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.2_card_customer2') }}</p>
                <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.2_card_requirment2') }}</p>
                <hr>
                <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.2_card_customer3') }}</p>
                <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.2_card_requirment3') }}</p>
                <hr>
            </div>
            {{--            desktop--}}
            <div class="hidden md:grid grid-cols-2 text-lg ml-2">
                <div>
                    <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.2_card_customer1') }}</p>
                    <hr> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.2_card_customer2') }}</p>
                    <hr> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.2_card_customer3') }}</p>
                </div>
                <div>
                    <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.2_card_requirment1') }}</p>
                    <hr>
                    <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.2_card_requirment2') }}
                    <hr>
                    <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.2_card_requirment3') }}</p>
                </div>
            </div>
        </div>
            <div id="item3" class="grid grid-rows-2 carousel-item w-full">

                {{--            picture--}}
                <div class="row-span-1">
                    <div class="text-center text-2xl"><p class="text-blue-500">{{__('menu.technologies') }}</p> <p>{{__('menu.cases.custom_software') }}</p></div>
                    <img class="mt-10 max-w-xs mx-auto" src="/img/custom_software.jpg">
                </div>
                {{--           text     --}}

                {{--            mobile--}}
                <div class="row-span-2 text-xl md:hidden">
                    <hr>
                    <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.3_card_customer1') }}</p>
                    <p class="text-blue-500">{{__('menu.requirements') }}</p> <p class="pb-4">{{__('menu.cases.3_card_requirment1') }}</p><hr>
                    <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.3_card_customer2') }}</p>
                    <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.3_card_requirment2') }}</p><hr>
                    <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.3_card_customer3') }}</p>
                    <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.3_card_requirment3') }}</p><hr>
                    <hr>
                </div>
                {{--            desktop--}}
                <div class="hidden md:grid grid-cols-2 text-lg ml-2">
                    <div>
                        <p class="text-blue-500">{{__('menu.customer') }}</p><p>{{__('menu.cases.3_card_customer1') }}</p><hr>
                        <p class="text-blue-500">{{__('menu.customer') }}</p><p>{{__('menu.cases.3_card_customer2') }}<hr>
                        <hr> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.3_card_customer3') }}</p><hr>

                    </div>
                    <div>
                        <p class="text-blue-500">{{__('menu.requirements') }}</p><p>{{__('menu.cases.3_card_requirment1') }}</p><hr>
                        <hr>
                        <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.3_card_requirment2') }}</p><hr>
                        <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.3_card_requirment3') }}</p><hr>

                    </div>
                </div>
            </div>

        <div id="item4" class="grid grid-col-1 carousel-item w-full">
            {{--            picture--}}
            <div class="row-span-1">
                <div class="text-center text-2xl"><p class="text-blue-500">{{__('menu.technologies') }}</p> <p>{{__('menu.cases.outstaffing') }}</p></div>
                <img class="mt-10 max-w-xs mx-auto" src="/img/outstaffing.jpg">
            </div>
            {{--           text     --}}

            {{--            mobile--}}
            <div class="row-span-2 text-xl md:hidden">
                <hr>
                <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer1') }}</p>
                <p class="text-blue-500">{{__('menu.requirements') }}</p> <p class="pb-4">{{__('menu.cases.4_card_requirment1') }}</p>
                <hr> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer2') }}</p>
                <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.4_card_requirment2') }}</p>
                <hr>
                <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer3') }}</p>
                <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.4_card_requirment3') }}</p>
                <hr>
                <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer4') }}</p>
                <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.4_card_requirment4') }}</p>
            </div>
            {{--            desktop--}}
            <div class="hidden md:grid grid-cols-2 text-lg ml-2">
                <div>
                    <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer1') }}</p>
                    <hr> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer2') }}</p>
                    <hr> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer3') }}</p>
                    <hr> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer4') }}</p>
                </div>
                <div>
                    <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.4_card_requirment1') }}</p>
                    <hr>
                    <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.4_card_requirment2') }}
                    <hr>
                    <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.4_card_requirment3') }}</p>
                    <hr>
                    <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.4_card_requirment4') }}</p>
                </div>
            </div>
        </div>
{{--            <div class="grid grid-cols-2 m-2 md:grid-cols-4 gap-2">--}}
{{--                <div class="col-span-1 h-40 w-40"><img src="/img/outstaffing.jpg"></div>--}}
{{--                <div class="col-span-1"><p class="text-blue-500">{{__('menu.technologies') }}</p> <p>{{__('menu.cases.outstaffing') }}</p></div>--}}
{{--                <div class="col-span-2">--}}
{{--                    <div class="grid grid-cols-2 grid-rows-3 gap-2">--}}
{{--                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer1') }}</p></div>--}}
{{--                        <div><p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.4_card_requirment1') }}</p></div>--}}
{{--                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer2') }}</p></div>--}}
{{--                        <div> <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.4_card_requirment2') }}</p></div>--}}
{{--                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer3') }}</p></div>--}}
{{--                        <div><p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.4_card_requirment3') }}</p></div>--}}
{{--                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>{{__('menu.cases.4_card_customer4') }}</p></div>--}}
{{--                        <div><p class="text-blue-500">{{__('menu.requirements') }}</p> <p>{{__('menu.cases.4_card_requirment4') }}</p></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div class="flex w-full justify-center gap-2 py-2">
        <a href="#item1" class="btn btn-md">1</a>
        <a href="#item2" class="btn btn-md">2</a>
        <a href="#item3" class="btn btn-md">3</a>
        <a href="#item4" class="btn btn-md">4</a>
    </div>
</x-app-layout>
