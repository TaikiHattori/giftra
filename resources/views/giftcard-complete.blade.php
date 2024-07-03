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
                            <li class="flex w-full relative justify-center text-yellow-600 text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-yellow-600 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-24 lg:after:left-28 md:after:left-24 sm:after:left-32 after:left-20">
                            <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                <span class="w-6 h-6 bg-yellow-600 text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">1</span> 作成
                            </div>
                            </li>
                            <li class="flex w-full relative justify-center text-yellow-600 text-base font-semibold after:content-['']  after:w-full after:h-0.5 after:bg-yellow-600 after:inline-block after:absolute lg:after:top-4 after:top-3 xl:after:left-24 lg:after:left-28 md:after:left-24 sm:after:left-32 after:left-20">
                            <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                <span class="w-6 h-6 bg-yellow-600 text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">2</span> プレビュー
                            </div>
                            </li>
                            <li class="flex w-full relative justify-center text-yellow-600 text-base font-semibold">
                                <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center">
                                    <span class="w-6 h-6 bg-yellow-600 text-center border-2 border-transparent rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">3</span> 完了
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
            <img class="w-full lg:mx-0 mx-auto h-full" src="/storage/img/giftcard_thankyou.jpg" alt="about Us image" />
        </div>


        <div class="mt-10 text-center">
            <h4 class="text-gray-900 text-xl font-semibold leading-loose">ギフトを贈る</h4>
            <div class="w-full">
                <div class="w-full">
                    <div class="w-full text-center flex-col justify-start items-start gap-1.5 flex">
                        <input id="copyTarget" class="w-full text-center text-gray-500 border-none m-auto" value="{{ env('APP_URL') }}/present/{{ $presentid }}" readonly>
                        <button onclick="copyToClipboard()" class="mx-auto sm:w-fit w-full px-9 py-3 bg-yellow-600 hover:bg-yellow-700 ease-in-out transition-all duration-700 rounded-xl shadow justify-center items-center flex px-3.5 text-center text-white text-lg font-semibold leading-8">受け取りリンクをコピーする
                        </button>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</section>

<script>
    function copyToClipboard() {
        var copyTarget = document.getElementById("copyTarget");
        copyTarget.select();
        document.execCommand("Copy");
    }
</script>
@include('layouts.footer')