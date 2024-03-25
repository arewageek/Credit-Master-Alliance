<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script>
            function canMakeRequest (){
                const lastRequstTime = localStorage.getItem('lastRequestTime')
                const now = new Date().getTime();
                
                // check if there was ever a previous request
                if(!lastRequstTime){
                    return false;
                }
    
                const sinceLastRequest = (now - lastRequstTime) / 1000
                console.log(sinceLastRequest)
    
                if(sinceLastRequest >= 100){
                    return true
                }
    
                return false;
            }
    
            function updateLastRequest () {
                const now = new Date().getTime()
                localStorage.setItem('lastRequestTime', now)
            }
    
            function makeNextRequest () {
                if(canMakeRequest()){
                    $.get('/api2/mine', res => {
                        const now = new Date().getTime()
                        localStorage.setItem('lastRequestTime', now)
                        console.log('Initiated')
                    })
                }
            }
    
            makeNextRequest()
            
        </script>

        <style>
            .already-hidden{
                width: auto;
            }
        </style>

        <!-- Styles -->
        @livewireStyles
        
        
        
        
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        
        <!--TAILWIND CSS CDN-->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
              theme: {
                extend: {
                    colors: {
                        btn: {
                            100: '#60d280',
                            200: '#fff',
                            // overlay color for btn
                            300: '#fff',
                        },
                        btntext: {
                            100: '#fff',
                            200: '#222',
                            
                            // colors for overlay button
                            300: '#60d280',
                            400: '#335'
                        },
                        secondary: {
                            100: '#fff',
                            200: '#dad',
        
                            //  bg for nav links
                            300: '#60d280'
                        },
                        primary: {
                            100: '#555',
                            200: '#777',
        
                            // bg for transparent block
                            300: '#5552',
                            400: '#fff'
                        },
                        accent: {
                            100: '#60d280'
                        }
                    }
                },
              }
            }
        </script>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="w-full">
                <div class="flex flex-col md:flex-row m-4">

                    {{-- side nav --}}
                        <div class="p-2 w-full md:w-[250pt] md:min-h-screen overflow-hidden sticky">
                            <div class="nav w-full shadow-lg h-auto md:min-h-1/3 bg-white rounded-2xl px-5 md:py-5 my-3 md:my-0">
                                <div class="px-3 py-2 rounded-lg my-3 bg-white flex justify-between items-center">
                                    <div class="font-bold nav-hidden">{{ auth() -> user() -> name}}</div>
                                    <div class="navig md:hidden" onclick="toggleNav()">
                                        <div class="navig-hover:hidden h-[25pt] w-[25pt] shadow-md flex justify-center items-center cursor-pointer hover:shadow-lg transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                            </svg>
                                        </div>

                                        <div class="navig-hover:flex hidden h-[25pt] w-[25pt] shadow-md justify-center items-center cursor-pointer hover:shadow-lg transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                                                <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-links text-primary-100 hidden md:block py-4">
                                    <a href="/dashboard" class="{{request() -> route() -> uri == 'dashboard' ? 'transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100' : 'hover:bg-primary-300 hover:text-secondary-300' }} cursor-pointer my-3 flex flex-wrap items-center w-full space-x-4 px-3 py-2 rounded-lg transition-all">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Dashboard
                                        </div>
                                    </a>

                                    <a href="/accounthistory" class="{{ request() -> route() -> uri == 'accounthistory' ? 'transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100' : 'hover:bg-primary-300 hover:text-secondary-300' }} cursor-pointer my-3 flex flex-wrap items-center w-full space-x-4 px-3 py-2 rounded-lg transition-all">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16">
                                                <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Transaction History
                                        </div>
                                    </a>
                                    
                                     <a href="{{ route('profile.show') }}" class="{{request() -> route() -> uri == 'support' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-primary-300 transition-all my-3 hover:text-primary-100 flex items-center space-x-4'}}">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                                            </svg>
                                        </div>
                                        <div class="flex items-center nav-hidden">
                                            Profile
                                        </div>
                                    </a>
                                    
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <button type="submit" class="{{request() -> route() -> uri == 'support' ? 'px-3 py-2 rounded-lg cursor-pointer transition-all my-3 bg-secondary-300 text-white hover:text-secondary-100 flex space-x-4 items-center' : 'px-3 py-2 rounded-lg cursor-pointer hover:bg-primary-300 transition-all my-3 hover:text-primary-100 flex items-center space-x-4'}}">
                                            <div class="flex justify-center items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                                </svg>
                                            </div>
                                            <div class="flex items-center nav-hidden">
                                                Logout
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    {{-- ? side nav --}}
                    
                    <div class="w-full">
                        {{ $slot }}

                        {{-- site footer --}}

                            <footer class="w-full p-5 border-t-2 border-t-gray-600">
                                <div class=" text-gray-600 text-sm">
                                    All Rights Reserved &copy; {{ env('APP_NAME') }} {{ Date('Y') }}
                                </div>
                            </footer>

                        {{-- ? site footer --}}
                        
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
