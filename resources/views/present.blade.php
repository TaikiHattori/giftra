@include('layouts.header')


    <section class="py-24">
      <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
          <div class="w-full mt-5 max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
              <div class="w-full justify-start items-center gap-8 grid lg:grid-cols-2 grid-cols-1">
                  <img class="w-full lg:mx-0 mx-auto h-full" src="https://pagedone.io/asset/uploads/1701157806.png" alt="about Us image" />
                  <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                      <div class="w-full">
                          <p class="text-xl font-normal leading-relaxed lg:text-start text-center">{{ $message }}</p>
                          <p class="mt-5 text-xl text-right leading-relaxed"><span class="font-bold">{{ $giftername }}</span> さんより</p>
                      </div>
                      <div class="w-full flex-col justify-start items-start gap-7 flex">
                          <div class="w-full justify-start items-start flex flex-col">
                              <h4 class="text-gray-900 text-xl font-semibold leading-loose">ギフトが届いています</h4>
                              <div class="w-full py-3 pb-5 flex">
                                  <div class="flex items-center flex-col min-[550px]:flex-row gap-3 min-[550px]:gap-4 w-full max-xl:justify-center max-xl:max-w-xl max-xl:mx-auto">
                                      <img src="https://pagedone.io/asset/uploads/1712126556.png" alt="Maharaja Chair image" class="w-[120px]">
                                      
                                      <div class="pro-data w-full max-w-sm flex-col justify-start items-start gap-2 inline-flex">
                                          <h4 class="w-full text-black text-lg font-medium leading-relaxed max-[550px]:text-center">{{ $giftname }}</h4>
                                      </div>
                                  </div>
                                  <div class="flex justify-end items-center w-full">
                                      <h4 class="max-w-[300px] w-full text-right text-black text-lg font-medium leading-relaxed pl-5">{{ ($giftfee) }}万円分の旅行</h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <div class="w-full mx-auto max-w-screen-md">
            <a href="/plan">
              <button class="mx-auto mt-10 sm:w-fit w-full px-9 py-3 bg-orange-600 hover:bg-orange-700 ease-in-out transition-all duration-700 rounded-xl shadow justify-center items-center flex">
                  <span class="px-3.5 text-center text-white text-lg font-semibold leading-8">旅行を計画する</span>
              </button>
            </a>
          </div>
      </div>
  </section>


@include('layouts.footer')