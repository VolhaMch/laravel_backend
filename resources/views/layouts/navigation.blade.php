<header>
<div x-data="{ isHome: @json(request()->path()=== '/') }" :class="isHome ? 'bg-transparent' : 'bg-black'" class="navbar  text-neutral-content">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl text-white">{{__('menu.volha_machys') }}</a>
    </div>
<div x-data="{ open: false }">
    <button @click="open = !open" class="p-4 focus:outline-none">
        <!-- Иконка бургер-меню -->
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
        </svg>
    </button>
    <!-- Меню для мобильной версии -->
    <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="transform translate-x-0" x-transition:leave-end="transform translate-x-full" class="fixed z-40 top-0 right-0 w-1/2 h-1/2 bg-neutral shadow-md md:hidden">
        <div class="m-4 link link-hover">
{{--            @if (Auth::check())--}}
{{--                <li><a href="{{ route('logout') }}">Log Out</a></li>--}}
{{--            @else--}}
{{--                <li><a href="{{ route('login') }}">Log In</a></li>--}}
{{--            @endif--}}
            <button @click="open = !open" class="p-4 focus:outline-none">
            <!-- Иконка крестик -->
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="mr-52 h-8 w-8  md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
            </button>
            <i class="fa-regular fa-user">
            </i>
            <a href="/login">Log in</a>
        </div>
    <ul class="flex flex-col">
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
    <!-- Меню для десктопной версии -->
    <nav class="hidden md:flex md:items-center md:space-x-4">
        <div class="m-4 link link-hover">
            {{--            @if (Auth::check())--}}
            {{--                <li><a href="{{ route('logout') }}">Log Out</a></li>--}}
            {{--            @else--}}
            {{--                <li><a href="{{ route('login') }}">Log In</a></li>--}}
            {{--            @endif--}}
            <i class="fa-regular fa-user">
            </i>
            <a href="/login">Log in</a>
        </div>
        <ul class="flex flex-row">
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

    </nav>
</div>
</header>
