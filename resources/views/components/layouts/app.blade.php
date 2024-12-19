<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ config('app.name') }}</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @filamentStyles
        @vite('resources/css/app.css')
    </head>

    <body class="antialiased">
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-4 lg:px-0">
                <div class="">
                    <div class="px-8 lg:px-6 md:px-6 pb-8">
                        <div class="my-6 flex items-center gap-x-6">
                            {{-- <x-navigated-button :secondary="true" href="{{ route('dashboard') }}">Kembali</x-navigated-button> --}}
                        </div>
                        
                        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight pb-4">
                            {{ $title ?? '' }}
                        </h3>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>

        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
