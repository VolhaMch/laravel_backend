<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
{{--    meta-tags--}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta data-n-head="ssr" property="og:type" content="{{$og_type}}">
    <meta data-n-head="ssr" property="og:title" content="{{$og_title}}">
    <meta data-n-head="ssr" property="og:site_name" content="{{$og_title}}">
    <meta data-n-head="ssr" property="og:url" content="{{$og_url}}">
    <meta data-n-head="ssr" property="og:image" content="{{$og_image}}">
    <meta data-n-head="ssr" property="og:description" content="{{$og_description}}">
    <meta data-n-head="ssr" property="product:plural_title" content="{{$product_plural_title}}">
    <meta data-n-head="ssr" name="thumbnail" content="{{$og_image}}">
    <meta data-n-head="ssr" name="twitter:title" content="{{$og_title}}">
    <meta data-n-head="ssr" name="twitter:description" content="{{$og_description}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>@yield('title', 'Default title')</title>
    @yield('meta')
{{--    json-ld структурирование--}}
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Volha Machys",
  "url": "http://127.0.0.1:8000",
  "logo": "https://www.example.com/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+375-29-687-58-87",
    "contactType": "Customer Service Leadgeneration",
    "areaServed": "EU, Belarus",
    "availableLanguage": "English, Russian"
  }
}
</script>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon16x16.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('favicon32x32.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
{{--<body class="bg-cover bg-center bg-no-repeat h-screen bg-opacity-25 bg-[url('/public/img/background_1.jpg')]" class="font-sans antialiased">--}}
<body x-data="{ isHome: @json(request()->path()=== '/') }" :class="isHome ? 'bg-[url(\'/public/img/background_1.jpg\')]' : 'bg-white' "class="bg-cover bg-center bg-no-repeat h-screen bg-opacity-25 font-sans antialiased">
{{--<body x-data="{ isHome: @json(request()->path() === '/') }" :class="isHome ? 'bg-[url(\"/img/background.jpg\")]' : 'bg-white'">--}}

<div class="min-h-screen  dark:bg-gray-900">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
{{--        class="bg-[url('/public/img/background.jpg')] bg-cover bg-center bg-opacity-25 bg-fixed h-screen"--}}
        {{ $slot }}
    </main>
</div>
@include('templates.footer')
@livewireScripts

</body>
</html>
