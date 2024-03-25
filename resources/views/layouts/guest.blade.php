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
                            200: '#1ceb56',
                            // overlay color for btn
                            300: '#1ceb56',
                        },
                        btntext: {
                            100: '#ffffff',
                            200: '#ffffff',
                            
                            // colors for overlay button
                            300: '#000000',
                            400: '#000000'
                        },
                        secondary: {
                            100: '#eee',
                            200: '#dad',
        
                            //  bg for nav links
                            300: '#379a'
                        },
                        primary: {
                            100: '#555',
                            200: '#777',
        
                            // bg for transparent block
                            300: '#5552',
                            400: '#379'
                        },
                        accent: {
                            100: '#0AB'
                        }
                    }
                },
              }
            }
        </script>
        
        <style>
            /*.bg-btn-100{*/
            /*    background-color: #000;*/
            /*}*/
            /*.bg-btn-200{*/
            /*    background-color: #49c;*/
            /*}*/
            /*.bg-btn-300{*/
            /*    background-color: #49c4;*/
            /*}*/
            
            
            /*.bg-btntext-100{*/
            /*    background-color: #ebe;*/
            /*}*/
            /*.bg-btntext-200{*/
            /*    background-color: #222;*/
            /*}*/
            /*.bg-btntext-300{*/
            /*    background-color: #15a;*/
            /*}*/
            /*.bg-btntext-400{*/
            /*    background-color: #335;*/
            /*}*/
            
            
            /*.bg-secondary-100 {*/
            /*    background-color: #eee;*/
            /*}*/
            /*.bg-secondary-200 {*/
            /*    background-color: #dad;*/
            /*}*/
            /*.bg-secondary-300 {*/
            /*    background-color: #379a;*/
            /*}*/
            
            
            /*.bg-primary-100 {*/
            /*    background-color: #555;*/
            /*}*/
            /*.bg-primary-200 {*/
            /*    background-color: #777;*/
            /*}*/
            /*.bg-primary-300 {*/
            /*    background-color: #5552;*/
            /*}*/
            /*.bg-primary-400 {*/
            /*    background-color: #379;*/
            /*}*/
            
            
            /*.bg-accent-100 {*/
            /*    background-color: #0AB;*/
            /*}*/
        </style>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
