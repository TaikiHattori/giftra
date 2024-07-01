@include('layouts.header')


    <section class="py-24">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full flex-col justify-start items-center gap-10 inline-flex mb-5">
                <div class="w-full flex-col justify-start items-center gap-4 flex">
                    <h2 class="w-full text-center text-black text-3xl font-bold font-manrope leading-normal">写真投稿</h2>
                    <p class="max-w-4xl text-center text-gray-500 text-base font-normal leading-relaxed">楽しかった場所を記録しましょう。</p>
                </div>
            </div>

            <div class="w-full mx-auto max-w-screen-md">

                <form method="POST" action="{{ url('/post/complete') }}">
                @csrf

                <div class="mt-5">
                    <h4 class="text-gray-900 text-xl font-semibold leading-loose">1. 写真を選ぶ</h4>
                    <div class="w-full">
                        <div class="w-full">
                            <div class="w-full flex-col justify-start items-start gap-1.5 flex">
                                あとで
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10">
                    <h4 class="text-gray-900 text-xl font-semibold leading-loose">2. 住所を入力する</h4>
                    <div class="w-full">
                        <div class="w-full">
                            <div class="w-full flex-col justify-start items-start gap-1.5 flex">
                                <input id="location" name="location" type="text" class="w-full focus:outline-none text-gray-900 placeholder-gray-400 text-lg font-normal leading-relaxed px-5 py-3 rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] border border-gray-200 justify-start items-center gap-2 inline-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="latitude" value="" >
                <input type="hidden" name="longitude" value="" >

                <div class="mt-10">
                    <h4 class="text-gray-900 text-xl font-semibold leading-loose">3. キャプション</h4>
                    <div class="w-full">
                        <div class="w-full">
                            <div class="w-full flex-col justify-start items-start gap-1.5 flex">
                                <textarea name="comment" rows="5" class="w-full focus:outline-none text-gray-900 placeholder-gray-400 text-lg font-normal leading-relaxed px-5 py-3 rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] border border-gray-200 justify-start items-center gap-2 inline-flex" placeholder="どんなことろが良かった？"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
  

                <div class="mt-10">
                    <h4 class="text-gray-900 text-xl font-semibold leading-loose">4. 評価</h4>
                    <div class="w-full">
                        <div class="w-full">
                            <div class="w-full flex-col justify-start items-start gap-1.5 flex">
                                あとで
                            </div>
                        </div>
                    </div>
                </div>



                <button class="mx-auto mt-10 sm:w-fit w-full px-9 py-3 bg-orange-600 hover:bg-orange-700 ease-in-out transition-all duration-700 rounded-xl shadow justify-center items-center flex">
                    <span class="px-3.5 text-center text-white text-lg font-semibold leading-8">登録する</span>
                </button>

                </form>
            </div>
        </div>
    </section>


    @include('layouts.footer')