<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <p>Hello, {{Auth::user()->name}}!</p>
                    <p>{{ __("You're logged in!") }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout Button -->
    <div class="mt-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline m-2 md:ml-16">
                {{ __('Logout') }}
            </button>
        </form>
    </div>
{{--    <!-- Saved Articles Section -->--}}
{{--    <h1>Избранные статьи</h1>--}}
{{--    @if($favorites->isEmpty())--}}
{{--        <p>У вас нет избранных статей.</p>--}}
{{--    @else--}}
{{--        @foreach($favorites as $blog)--}}
{{--            <div>{{ $blog->title }}</div>--}}
{{--        @endforeach--}}
{{--    @endif--}}
</x-app-layout>
