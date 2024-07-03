@include('layouts.header')


<section class="flex pt-20 justify-center bg-gradient-to-r from-yellow-200 to-yellow-400">
    <div class="mx-auto w-full max-w-lg px-6 lg:px-8 py-20">
        <div class="rounded-2xl bg-white shadow-xl">

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="lg:p-11 p-7 mx-auto">
                @csrf
                <div class="mb-11">
                    <h1 class="text-gray-900 text-center font-manrope text-3xl font-bold leading-10 mb-2">ログイン</h1>
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('ログイン情報を保存する') }}</span>
                    </label>
                </div>

                <div class="mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('パスワードをお忘れですか?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3">
                        {{ __('ログイン') }}
                    </x-primary-button>
                </div>
            </form>
            </div>
        </div>
    </section>

@include('layouts.footer')