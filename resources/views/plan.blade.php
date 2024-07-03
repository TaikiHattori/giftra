@include('layouts.header')


    <section class="py-24">
      <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
          <div class="w-full flex-col justify-start items-center gap-10 inline-flex">
              <div class="w-full flex-col justify-start items-center gap-4 flex">
                  <h2 class="w-full text-center text-black text-3xl font-bold font-manrope leading-normal">あなたについて教えてください</h2>
                  <p class="max-w-4xl text-center text-gray-500 text-base font-normal leading-relaxed">あなたにあったセレンディピティに出会えます。</p>
              </div>
          </div>
          
          <div class="w-full mt-12 mx-auto max-w-screen-md">

          <form method="POST" action="{{ url('/photo') }}">
          @csrf

              <div class="mt-5">
                  <h4 class="text-gray-900 text-xl font-semibold leading-loose">どなたと出かけますか？</h4>
                  <div class="w-full">
                      <div class="w-full">
                          <div class="w-full justify-start items-center gap-6 flex md:flex-row flex-col">
                              <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                                <img src="/storage/img/who_couple.jpg" class="max-w-32 rounded-xl">
                                <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">夫婦</p>
                                <input type="radio" name="who" value="夫婦" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                              </label>

                              <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                                <img src="/storage/img/who_parent.jpg" class="max-w-32 rounded-xl">
                                <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">親子</p>
                                <input type="radio" name="who" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                              </label>
                
                              <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                                <img src="/storage/img/who_friend.jpg" class="max-w-32 rounded-xl">
                                <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">友達</p>
                                <input type="radio" name="who" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                              </label>
                          </div>
                      </div>
                  </div>
              </div>


              <div class="mt-10">
                <h4 class="text-gray-900 text-xl font-semibold leading-loose">どのようなテーマで利用しますか？</h4>
                <div class="w-full">
                    <div class="w-full">
                        <div class="w-full justify-start items-center gap-6 flex md:flex-row flex-col">
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                              <img src="/storage/img/theme_activity.jpg" class="max-w-32 rounded-lg">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">アクティビティ</p>
                              <input type="radio" name="theme" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                            </label>

                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                              <img src="/storage/img/theme_spa.jpg" class="max-w-32 rounded-lg">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">温泉</p>
                              <input type="radio" name="theme" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                            </label>
              
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                              <img src="/storage/img/theme_nature.jpg" class="max-w-32 rounded-lg">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">自然</p>
                              <input type="radio" name="theme" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                            </label>

                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                              <img src="/storage/img/theme_gourmet.jpg" class="max-w-32 rounded-lg">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">グルメ</p>
                              <input type="radio" name="theme" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                            </label>
                        </div>
                    </div>
                </div>
            </div>


              <div class="mt-10">
                <h4 class="text-gray-900 text-xl font-semibold leading-loose">あなたの年代を教えてください</h4>
                <div class="w-full">
                    <div class="w-full">
                        <div class="w-full justify-start items-center gap-6 flex md:flex-row flex-col">
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">30代以下</p>
                              <input type="radio" name="age" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                            </label>

                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">40代</p>
                              <input type="radio" name="age" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                            </label>
              
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">50代</p>
                              <input type="radio" name="age" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                            </label>
              
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">60代</p>
                              <input type="radio" name="age" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                            </label>
              
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-yellow-600 hover:bg-yellow-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-yellow-500 has-[:checked]:bg-yellow-50 has-[:checked]:border-yellow-500 has-[:checked]:ring-yellow-500"">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">70代以上</p>
                              <input type="radio" name="age" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-yellow-950/10 checked:border-yellow-500 checked:ring-yellow-500" required>
                            </label>
                        </div>
                    </div>
                </div>


            </div>


              <button class="mx-auto mt-10 sm:w-fit w-full px-9 py-3 bg-yellow-600 hover:bg-yellow-700 ease-in-out transition-all duration-700 rounded-xl shadow justify-center items-center flex">
                  <span class="px-3.5 text-center text-white text-lg font-semibold leading-8">次に進む</span>
              </button>
          </div>
          </form>
        </div>
    </section>


  @include('layouts.footer')