<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
{{--            {{ __('Dashboard') }}--}}
            Личный кабинет

        </h1>
    </x-slot>
    <div class="grid grid-cols-1 md:grid-cols-2">
{{--        hello section--}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden text-xl">
                <div class="p-6 text-gray-900 text-center dark:text-gray-100">
                   <p>{{__('menu.hello')}}, {{Auth::user()->name}}!</p>
                    <p>{{ __('menu.log') }}</p>
                </div>
            </div>
        </div>
    </div>
{{--    <!-- Saved Articles Section -->--}}
    <div class="mt-6 text-center">
    <h2 class="font-bold">{{ __('menu.favorite_art') }}</h2>
        <hr>
        @if(auth()->user()->favorites->isEmpty())
            <p class="mt-2">{{ __('menu.no_favorites') }}</p>
        @else
    <ul>


{{--        list of articles--}}
        @foreach(auth()->user()->favorites as $favorite)
            <li class="hover:bg-blue-200 active:bg-blue-400 transition-colors">
                <a href="{{ route('blog', $favorite->blog->id) }}" >
                    {{ $favorite->blog->name }}
                </a>
            </li>
            <hr>
        @endforeach
    </ul>
        @endif
    </div>

    </div>
    <!-- Logout Button -->
    <div class="mt-4 text-center">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline m-2 md:ml-16">
                {{ __('Logout') }}
            </button>
        </form>
    </div>
</x-app-layout>
