
<div class="navbar bg-neutral text-neutral-content">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl text-white">{{__('menu.volha_machys') }}</a>
    </div>

    <button class="btn btn-square btn-ghost mr-10 md:hidden block">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </button>

    <div class="hidden md:flex md:items-center md:w-auto w-full">
        <ul class="m-4 link link-hover">
{{--            @if (Auth::check())--}}
{{--                <li><a href="{{ route('logout') }}">Log Out</a></li>--}}
{{--            @else--}}
{{--                <li><a href="{{ route('login') }}">Log In</a></li>--}}
{{--            @endif--}}
            <i class="fa-regular fa-user">
            </i>
            <a href="/login">Log in</a>
        </ul>

        <div class="flex flex-row">

    <ul class="flex flex-row mt-4">
        <li class="px-2 link link-hover">
            @if($_SERVER['REQUEST_URI'] == '/')
                <span class="bg-gray-600")>{{__('menu.home')}}</span>
                @else
            <a href="/">{{__('menu.home')}}</a>
            @endif
        </li>
        <li class="px-2 link link-hover">
            @if($world == 'portfolio')
                <span class="bg-gray-600">{{__('menu.portfolio')}}</span>
            @else
            <a href="/portfolio">{{__('menu.portfolio')}}</a>
            @endif
        </li>
        <li class="px-2 link link-hover">
            @if($world == 'case')
            <span class="bg-gray-600">{{__('menu.case_studies')}}</span>
            @else
            <a href="/case">{{__('menu.case_studies')}}</a>
            @endif
        </li>
        <li class="px-2 link link-hover">
            @if($world == 'blogs')
                <span class="bg-gray-600">{{__('menu.blog')}}</span>
            @else
            <a href="/blogs">{{__('menu.blog')}}</a>
        @endif
        </li>
{{--        <li class="px-2 link link-hover">--}}
{{--            @if($world == 'contact')--}}
{{--                <span class="bg-gray-600">{{__('menu.contact_me')}}</span>--}}
{{--            @else--}}
{{--            <a href="/contact">{{__('menu.contact_me')}}</a>--}}
{{--            @endif--}}
{{--        </li>--}}
        <li class="px-2 link link-hover">
            @if($world == 'review')
                <span class="bg-gray-600">{{__('menu.contact_me')}}</span>
            @else
                <a href="/review">{{__('menu.contact_me')}}</a>
            @endif
        </li>

    </ul>

        <ul class="menu menu-horizontal px-4">
            <li>
                <details>
                    <summary>
                        {{App::getLocale()}}
                    </summary>
                    <ul class="p-2 bg-base-100 rounded-t-none text-gray-400">
                        <li><a href="/?lang=en">EN</a></li>
                        <li><a href="/?lang=ru">RU</a></li>
                    </ul>
                </details>
            </li>



    </ul>

</div>
</div>
</div>
