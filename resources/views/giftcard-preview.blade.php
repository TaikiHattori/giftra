<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.1.2/src/css/pagedone.css"/>
    <title>Document</title>
</head>
<body>

    <!-- header -->
   
    <!--end header -->





    <section class="py-24">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full flex-col justify-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-start items-center gap-4 flex">
                    <h2 class="w-full text-center text-black text-3xl font-bold font-manrope leading-normal">プレビュー</h2>
                    <p class="max-w-4xl text-center text-gray-500 text-base font-normal leading-relaxed">贈る内容を確認してください。</p>
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
                                <li class="flex w-full relative justify-center text-orange-600 text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-gray-300 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-24 lg:after:left-28 md:after:left-24 sm:after:left-32 after:left-20">
                                <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                    <span class="w-6 h-6 bg-orange-600 text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">2</span> プレビュー
                                </div>
                                </li>
                                <li class="flex w-full relative justify-center text-orange-600 text-base font-semibold">
                                    <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                        <span class="bg-white w-6 h-6 text-orange-600 border-2 bg-transparent border-orange-600 rounded-full flex justify-center items-center mx-auto mb-1 text-sm lg:w-8 lg:h-8">3</span> 完了
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        <form method="POST" action="{{ url('/giftcard/preview/complete') }}">
        @csrf
            <div class="w-full mt-5 max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">

            
                <div class="w-full justify-start items-center gap-8 grid lg:grid-cols-2 grid-cols-1">
                    <img class="w-full lg:mx-0 mx-auto h-full" src="https://pagedone.io/asset/uploads/1701157806.png" alt="about Us image" />
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                        
                        
                        <div class="w-full">
                            <p class="text-xl font-normal leading-relaxed lg:text-start text-center">{{ $message}}</p>
                            <input type="hidden" name="message" value="{{ $message}}">

                            <p class="mt-5 text-xl text-right leading-relaxed"><span class="font-bold">{{ $giftername}}</span> さんより</p>
                            <input type="hidden" name="giftername" value="{{ $giftername}}">
                        </div>
                        

                        <div class="w-full flex-col justify-start items-start gap-7 flex">
                            <div class="w-full justify-start items-start flex flex-col">
                                <h4 class="text-gray-900 text-xl font-semibold leading-loose">ギフトが届いています</h4>
                                <div class="w-full py-3 pb-5 flex">
                                    <div class="flex items-center flex-col min-[550px]:flex-row gap-3 min-[550px]:gap-4 w-full max-xl:justify-center max-xl:max-w-xl max-xl:mx-auto">
                                        
                                        <img src="https://pagedone.io/asset/uploads/1712126556.png" alt="Maharaja Chair image" class="w-[120px]">
                                        <span>{{ $giftphoto}}</span>
                                        <input type="hidden" name="giftphoto" value="{{ $giftphoto}}">

                                        <div class="pro-data w-full max-w-sm flex-col justify-start items-start gap-2 inline-flex">
                                            <h4 class="w-full text-black text-lg font-medium leading-relaxed max-[550px]:text-center">{{ $giftname}}</h4>
                                            <input type="hidden" name="giftname" value="{{ $giftname}}">
                                        </div>

                                    </div>
                                    <div class="flex justify-end items-center w-full">
                                        <h4 class="max-w-[300px] w-full text-right text-black text-lg font-medium leading-relaxed pl-5">{{ $giftfee}}万円分の旅行</h4>
                                        <input type="hidden" name="giftfee" value="{{ $giftfee}}">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full mx-auto max-w-screen-md">
                <div class="w-full mt-10 flex-col justify-start items-start lg:gap-10 gap-8 inline-flex">
                    <div class="w-full rounded-xl flex-col justify-start items-start gap-6 flex">
                        <div class="w-full pb-6 border-b border-gray-200 justify-between items-start gap-6 inline-flex">
                            <h3 class="text-gray-900 text-2xl font-semibold font-manrope leading-9">合計（税込）</h3>
                            <h3 class="text-right text-orange-600 text-2xl font-bold font-manrope leading-9">{{ ($giftfee * 1.1)}}万円</h3>
                            <input type="hidden" name="giftfee" value="{{ ($giftfee * 1.1)}}">
                        </div>
                    </div>
                </div>

                <button class="mx-auto mt-10 sm:w-fit w-full px-9 py-3 bg-orange-600 hover:bg-orange-700 ease-in-out transition-all duration-700 rounded-xl shadow justify-center items-center flex">
                    <span class="px-3.5 text-center text-white text-lg font-semibold leading-8">決済する</span>
                </button>
            </div>

        </form>    
        </div>
    </section>






    <!-- footer -->
    
    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.1.2/src/js/pagedone.js"></script>


    

</body>
</html>