<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>LC-Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="top-0 right-0 px-6 py-4">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
            
                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img src="http://gravatar.com/avatar/0000000000000000000000000?d=mp" 
                         alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex">
            <div class="w-70 mr-5">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere quaerat labore sint ad, ratione molestias nisi velit omnis consequatur sunt dicta voluptatum laudantium tempore beatae veritatis id neque non pariatur animi corporis temporibus nulla voluptates vero. Ducimus sit maiores soluta iste ea minima dicta eveniet reprehenderit perspiciatis fugit tempore inventore voluptas dolor illo illum, ipsam architecto. Vel, neque. Quaerat in sunt iusto obcaecati officia sit fuga minus numquam impedit? Unde tenetur praesentium at. Totam cupiditate nostrum dicta harum architecto suscipit eius perspiciatis quia quaerat impedit. Dignissimos, sunt nesciunt. Voluptate ipsum excepturi error reiciendis dicta odio? Facere, exercitationem non. Sit, cum.
            </div>
            <div class="w-175">
                <nav class="flex item-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            Considering (7)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            In Progress (6)</a></li>
                    </ul>

                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            Implemented (1)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            Closed (1)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
