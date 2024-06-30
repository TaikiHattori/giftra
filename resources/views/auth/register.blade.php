@include('layouts.header')


<section class="flex pt-20 justify-center bg-gradient-to-r from-orange-200 to-orange-400">
    <div class="mx-auto w-full max-w-lg px-6 lg:px-8 py-20">
        <div class="rounded-2xl bg-white shadow-xl">

            <form method="POST" action="{{ route('register') }}" class="lg:p-11 p-7 mx-auto">
                @csrf
                <div class="mb-11">
                    <h1 class="text-gray-900 text-center font-manrope text-3xl font-bold leading-10 mb-2">新規登録</h1>
                </div>

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('アカウントをお持ちの方はログイン') }}
                    </a>

                    <x-primary-button>
                        {{ __('新規登録') }}
                    </x-primary-button>
                </div>
            </form>

            </div>
        </div>
    </section>

@include('layouts.footer')