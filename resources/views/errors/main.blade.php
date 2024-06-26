<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @include('site.partial.favicon')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    {{ Vite::useHotFile(public_path('site/hot'))->useBuildDirectory('site')->withEntryPoints(['resources/site/css/site.css']) }}
</head>


<body class="font-sans antialiased">
    <div class="py-16 flex flex-col justify-center items-center px-6 mx-auto h-screen xl:px-0 dark:bg-gray-900 gap-5">
        @yield('content')
    </div>
    @include('site.layout.footer')
</body>

</html>
