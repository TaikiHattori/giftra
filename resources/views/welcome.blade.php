@include('layouts.header')


    <!-- hero -->
    <section class="pt-20 pt-0  lg:pl-8 h-full">
        <div
            class="rounded-2xl bg-emerald-50 py-10 overflow-hidden m-5 lg:m-0 2xl:py-16 xl:py-8  lg:rounded-tl-2xl lg:rounded-bl-2xl ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-14 items-center lg:grid-cols-12 lg:gap32">
                <div class="w-full xl:col-span-5 lg:col-span-6 2xl:-mx-5 xl:-mx-0">
                <h1 class="py-8 text-center text-gray-900 font-bold font-manrope text-5xl lg:text-left leading-[70px]">
                    大切なあの人へ<br><span class="text-yellow-600">セレンディピティ</span>を贈ろう
                </h1>
                <p class=" text-gray-500 text-lg text-center lg:text-left">
                    セレンディピティとは、「思いもよらなかった偶然がもたらす幸運」を意味する言葉です。
                </p>
                </div>
                <div class="w-full xl:col-span-7  lg:col-span-6 block">
                <div class="w-full  sm:w-auto lg:w-[60.8125rem] xl:ml-16">
                    <img src="/storage/img/top.jpg" alt="Dashboard image" class="w-full lg:h-auto rounded-3xl">
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- end hero -->


    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-manrope font-bold text-3xl min-[400px]:text-4xl text-black mb-8 max-lg:text-center">贈る価格から選ぶ</h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <a href="/giftcard" class="max-w-[384px] mx-auto">
                    <div class="w-full max-w-sm aspect-square">
                        <img src="/storage/img/gift_standard.jpg" alt="cream image" class="w-full h-full rounded-xl">
                    </div>
                    <div class="mt-5 flex items-center justify-between">
                        <div class="">
                            <h6 class="font-medium text-xl leading-8 text-black mb-2">Standard</h6>
                            <h6 class="font-semibold text-xl leading-8 text-yellow-600">5万円</h6>
                        </div>
                        <button
                            class="p-2 min-[400px]:p-4 rounded-full bg-white border border-gray-300 flex items-center justify-center group shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-400 hover:bg-gray-50">
                            <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                                xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                fill="none">
                                <path
                                    d="M12.6892 21.125C12.6892 22.0225 11.9409 22.75 11.0177 22.75C10.0946 22.75 9.34632 22.0225 9.34632 21.125M19.3749 21.125C19.3749 22.0225 18.6266 22.75 17.7035 22.75C16.7804 22.75 16.032 22.0225 16.032 21.125M4.88917 6.5L6.4566 14.88C6.77298 16.5715 6.93117 17.4173 7.53301 17.917C8.13484 18.4167 8.99525 18.4167 10.7161 18.4167H18.0056C19.7266 18.4167 20.587 18.4167 21.1889 17.9169C21.7907 17.4172 21.9489 16.5714 22.2652 14.8798L22.8728 11.6298C23.3172 9.25332 23.5394 8.06508 22.8896 7.28254C22.2398 6.5 21.031 6.5 18.6133 6.5H4.88917ZM4.88917 6.5L4.33203 3.25"
                                    stroke="" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                </a>

                <a href="/giftcard" class="max-w-[384px] mx-auto">
                    <div class="w-full max-w-sm aspect-square">
                        <img src="/storage/img/gift_special.jpg" alt="cream image" class="w-full h-full rounded-xl">
                    </div>
                    <div class="mt-5 flex items-center justify-between">
                        <div class="">
                            <h6 class="font-medium text-xl leading-8 text-black mb-2">Special</h6>
                            <h6 class="font-semibold text-xl leading-8 text-yellow-600">10万円</h6>
                        </div>
                        <button
                            class="p-2 min-[400px]:p-4 rounded-full bg-white border border-gray-300 flex items-center justify-center group shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-400 hover:bg-gray-50">
                            <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                                xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                fill="none">
                                <path
                                    d="M12.6892 21.125C12.6892 22.0225 11.9409 22.75 11.0177 22.75C10.0946 22.75 9.34632 22.0225 9.34632 21.125M19.3749 21.125C19.3749 22.0225 18.6266 22.75 17.7035 22.75C16.7804 22.75 16.032 22.0225 16.032 21.125M4.88917 6.5L6.4566 14.88C6.77298 16.5715 6.93117 17.4173 7.53301 17.917C8.13484 18.4167 8.99525 18.4167 10.7161 18.4167H18.0056C19.7266 18.4167 20.587 18.4167 21.1889 17.9169C21.7907 17.4172 21.9489 16.5714 22.2652 14.8798L22.8728 11.6298C23.3172 9.25332 23.5394 8.06508 22.8896 7.28254C22.2398 6.5 21.031 6.5 18.6133 6.5H4.88917ZM4.88917 6.5L4.33203 3.25"
                                    stroke="" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                </a>

                <a href="/giftcard" class="max-w-[384px] mx-auto">
                    <div class="w-full max-w-sm aspect-square relative">
                        <img src="/storage/img/gift_premium.jpg" alt="cream image" class="w-full h-full rounded-xl">
                    </div>
                    <div class="mt-5 flex items-center justify-between">
                        <div class="">
                            <h6 class="font-medium text-xl leading-8 text-black mb-2">Premium</h6>
                            <h6 class="font-semibold text-xl leading-8 text-yellow-600">30万円</h6>
                        </div>
                        <button
                            class="p-2 min-[400px]:p-4 rounded-full bg-white border border-gray-300 flex items-center justify-center group shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-400 hover:bg-gray-50">
                            <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                                xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                fill="none">
                                <path
                                    d="M12.6892 21.125C12.6892 22.0225 11.9409 22.75 11.0177 22.75C10.0946 22.75 9.34632 22.0225 9.34632 21.125M19.3749 21.125C19.3749 22.0225 18.6266 22.75 17.7035 22.75C16.7804 22.75 16.032 22.0225 16.032 21.125M4.88917 6.5L6.4566 14.88C6.77298 16.5715 6.93117 17.4173 7.53301 17.917C8.13484 18.4167 8.99525 18.4167 10.7161 18.4167H18.0056C19.7266 18.4167 20.587 18.4167 21.1889 17.9169C21.7907 17.4172 21.9489 16.5714 22.2652 14.8798L22.8728 11.6298C23.3172 9.25332 23.5394 8.06508 22.8896 7.28254C22.2398 6.5 21.031 6.5 18.6133 6.5H4.88917ZM4.88917 6.5L4.33203 3.25"
                                    stroke="" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </section>


@include('layouts.footer')