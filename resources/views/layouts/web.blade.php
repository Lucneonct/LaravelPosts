<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Curso de programación web</title>
</head>

<body>
    <header>
        <div class="shadow-lg">
            <div class="bg-blue-900 py-1"></div>
            <nav id="header" class="w-full z-30 top-10 bg-blue-600 shadow-lg border-b border-blue-400">
                <div class="w-full flex items-center justify-between mt-0 px-6 py-2">
                    <label for="menu-toggle" class="cursor-pointer md:hidden block">
                        <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 20 20">
                            <title>menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </label>
                    <input class="hidden" type="checkbox" id="menu-toggle">

                    <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                        <nav>
                            <ul class="md:flex items-center justify-between text-base text-blue-600 pt-4 md:pt-0">
                                <li>}
                                    <a class="inline-block no-underline hover:text-black font-medium text-lg py-2 px-4 lg:-ml-2"
                                        href="{{ route('home') }}">
                                        <img src="{{ asset('images/isotipo-platzi.png') }}" class="h-10">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4"
                        id="nav-content">
                        <div class="auth flex items-center w-full md:w-full">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="bg-transparent text-gray-300  p-2 rounded border border-gray-300 mr-4 hover:bg-gray-100 hover:text-gray-700">Dashboard</a>
                            @else
                                <a
                                    href="{{ url('/login') }}"
                                    class="bg-transparent text-gray-300  p-2 rounded border border-gray-300 mr-4 hover:bg-gray-100 hover:text-gray-700">
                                    Login in
                                </a>
                                <a 
                                  href="{{ url('/register') }}"
                                  class="bg-blue-600 text-gray-200  p-2 rounded  hover:bg-blue-500 hover:text-gray-100">
                                    Register
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main class="py-10">
            <div class="container mx-auto px-4">
                @yield('content')
            </div>
        </main>
    </body>

    </html>
