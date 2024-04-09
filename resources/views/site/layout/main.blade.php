<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    {{ Vite::useHotFile(public_path('site/hot'))->useBuildDirectory('site')->withEntryPoints(['resources/site/css/site.css']) }}
</head>

<body class="font-sans text-brand-blue antialiased">
    <header>
        <nav class="bg-brand-yellow">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4 border-b">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="text-3xl font-black">UCLearn Code</span>
                </a>
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <a href="/login" class="font-black uppercase">Login</a>
                    <a href="/register"
                        class="uppercase font-black border-2 border-black bg-brand-yellow px-3 py-1.5 text-center rounded-md">
                        <span>Get Started</span>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="bg-brand-gray">
        <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
            <div class="grid grid-cols-3 gap-8 md:grid-cols-3">

                <div class="">
                    <a href="#" class="flex mb-5 text-2xl font-black">
                        UCLearn Code
                    </a>
                    <a href="https://github.com/alleyshairu/codecircuit" class="text-gray-500 hover:text-gray-900">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <div>
                    <h3 class="mb-6 text-sm font-black uppercase">About</h3>
                    <ul class="text-sm">
                        <li class="mb-4">
                            <a href="{{ route('team') }}" class=" hover:underline">Team</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-sm font-black uppercase">Help center</h3>
                    <ul class="text-sm">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
