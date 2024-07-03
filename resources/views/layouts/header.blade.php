<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">

    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}=places,directions"></script>
    @vite(['resources/css/app.css','resources/js/api.js'])

    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.1.2/src/css/pagedone.css"/>
    <title>ギフトラ</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>
<body>
    <!-- header -->
    <header>
        <nav class="fixed z-50 w-full bg-white transition-all duration-500 ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="w-full flex justify-between flex-col lg:flex-row">
                    <div class=" flex justify-between  lg:flex-row">
                        <a href="/" class="flex items-center">
                            <img src="/storage/img/giftra_logo.png" alt="" class="w-full max-w-40">
                        </a>
                        <button data-collapse-toggle="navbar" type="button"
                            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                            aria-controls="navbar-default" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:pl-11 max-lg:py-4" id="navbar">
                        @if (Route::has('login'))
                        @auth

                            <div class="flex lg:items-center justify-start flex-col lg:flex-row max-lg:gap-4 lg:flex-1 lg:justify-end">
                                <a href="{{ url('/giftcard') }}" 
                                class="bg-yellow-600 text-white rounded-full cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 py-3 px-6 text-sm lg:ml-5 hover:bg-yellow-700">ギフトを贈る
                                </a>
                            </div>

                            @else
                            <ul class="flex lg:items-center flex-col max-lg:gap-4 mt-4 lg:mt-0 lg:flex-row max-lg:mb-4">
                                <li>
                                    <a href="{{ route('register') }}"
                                    class="text-gray-500 text-base lg:text-base font-medium hover:text-yellow-700 transition-all duration-500 mb-2 block lg:mr-6 md:mb-0 lg:text-left ">新規登録</a>
                                </li>
                            </ul>
                            <div class="flex lg:items-center justify-start flex-col lg:flex-row max-lg:gap-4 lg:flex-1 lg:justify-end">
                                <a href="{{ route('login') }}" 
                                class="bg-yellow-600 text-white rounded-full cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 py-3 px-6 text-sm lg:ml-5 hover:bg-yellow-700">ログイン
                                </a>
                            </div>
                        @endauth
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--end header -->