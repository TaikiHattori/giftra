@include('layouts.header')

 <section class="py-24">
      <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
          <div class="w-full flex-col justify-start items-center gap-10 inline-flex">
              <div class="w-full flex-col justify-start items-center gap-4 flex">
                  <h2 class="w-full text-center text-black text-3xl font-bold font-manrope leading-normal">決済完了</h2>
                  <p class="max-w-4xl text-center text-gray-500 text-base font-normal leading-relaxed">ご購入ありがとうございます。</p>
              </div>
              <div class="w-full max-w-screen-sm flex-col justify-start items-start gap-10 flex">
                  <div class="w-full py-9 rounded-xl flex-col justify-start items-start flex">
                      <div class="w-full flex-col justify-center sm:items-center items-start gap-8 flex">
                          <ol class="flex sm:items-center items-start w-full sm:gap-0 gap-5">
                              <li class="flex w-full relative justify-center text-orange-600 text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-orange-600 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-24 lg:after:left-28 md:after:left-24 sm:after:left-32 after:left-20">
                              <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                  <span class="w-6 h-6 bg-orange-600 text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">1</span> 作成
                              </div>
                              </li>
                              <li class="flex w-full relative justify-center text-orange-600 text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-orange-600 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-24 lg:after:left-28 md:after:left-24 sm:after:left-32 after:left-20">
                              <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                  <span class="w-6 h-6 bg-orange-600 text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">2</span> プレビュー
                              </div>
                              </li>
                              <li class="flex w-full relative justify-center text-orange-600 text-base font-semibold">
                                  <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                      <span class="w-6 h-6 bg-orange-600 text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">3</span> 完了
                                  </div>
                              </li>
                          </ol>
                      </div>
                  </div>
              </div>
          </div>


          <div class="w-full mx-auto max-w-screen-md">
            <p class="max-w-4xl text-center text-gray-500 text-base font-normal leading-relaxed">プレゼントの準備ができました。</p>

            <div class="w-full max-w-md mt-5 text-center m-auto">
              <img class="w-full lg:mx-0 mx-auto h-full" src="https://pagedone.io/asset/uploads/1701157806.png" alt="about Us image" />
            </div>


              <button class="mx-auto mt-10 sm:w-fit w-full px-9 py-3 bg-orange-600 hover:bg-orange-700 ease-in-out transition-all duration-700 rounded-xl shadow justify-center items-center flex">
                  <span class="px-3.5 text-center text-white text-lg font-semibold leading-8">受け取りリンクをコピーする</span>
              </button>
          </div>
      </div>
  </section>

  @include('layouts.footer')