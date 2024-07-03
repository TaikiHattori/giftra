@include('layouts.header')

@vite(['resources/assets/tinder.49154e1a.js','resources/assets/modulepreload-polyfill.b7f2da20.js','resources/assets/vendor.602a9696.js','resources/assets/effect-tinder.f396dd4b.js','resources/assets/effect-tinder.aef0cf08.css','resources/assets/tinder.17df37a4.css'])

<section class="py-24">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full flex-col justify-start items-center gap-10 inline-flex">
          <div id="app" class="drop-shadow-xl">
            <!-- Tinder slider -->
            <div class="swiper">
                <div class="swiper-wrapper">

                    @if (count($photo) > 0)
                        @foreach ($photo as $post)
                            <div class="swiper-slide">
                                <input type="hidden" class="postid-hidden" value="{{ $post->id }}" />
                                <input type="hidden" class="latitude-hidden" value="{{ $post->latitude }}" />
                                <input type="hidden" class="longitude-hidden" value="{{ $post->longitude }}" />
                                <input type="hidden" class="img-hidden" value="{{ Storage::url($post->path) }}" />
                                <img src="{{ Storage::url($post->path) }}" alt="">
                                <div class="swiper-tinder-label swiper-tinder-label-yes">Like</div>
                                <div class="swiper-tinder-label swiper-tinder-label-no">Nope</div>
                                <div class="demo-slide-name">
                                    <div class="mb-2">{{ $post->comment }}</div>
                                    <span class="text-xs mr-2">#ホテル</span><span class="text-xs mr-2">#軽井沢</span><span class="text-xs mr-2">#30代に人気</span>

                                    <div class="mt-2 flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                            fill="none">
                                            <g clip-path="url(#clip0_13624_2974)">
                                                <path
                                                    d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                                    fill="#FBBF24" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_13624_2974">
                                                    <rect width="30" height="30" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                            fill="none">
                                            <g clip-path="url(#clip0_13624_2974)">
                                                <path
                                                    d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                                    fill="#FBBF24" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_13624_2974">
                                                    <rect width="30" height="30" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                            fill="none">
                                            <g clip-path="url(#clip0_13624_2974)">
                                                <path
                                                    d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                                    fill="#FBBF24" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_13624_2974">
                                                    <rect width="30" height="30" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                            fill="none">
                                            <g clip-path="url(#clip0_13624_2974)">
                                                <path
                                                    d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                                    fill="#FBBF24" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_13624_2974">
                                                    <rect width="30" height="30" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                            fill="none">
                                            <g clip-path="url(#clip0_13624_2974)">
                                                <path
                                                    d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                                    fill="#FBBF24" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_13624_2974">
                                                    <rect width="30" height="30" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    <div class="swiper-slide demo-empty-slide text-center bg-[url('https://pagedone.io/asset/uploads/1705473908.png')] bg-cover">
                      <p class="text-gray-900 text-3xl md:text-xl font-semibold leading-loose">あなたにぴったりな<br>セレンディピティが見つかりました！</p>
                        <div>
                            <form method="post" action="{{ url('/guide') }}" id="form">
                                @csrf
                                <input type="submit" value="しおりを確認する" class="mx-auto mt-10 sm:w-fit w-full px-9 py-3 bg-yellow-600 hover:bg-yellow-700 ease-in-out transition-all duration-700 rounded-xl shadow justify-center items-center flex px-3.5 text-center text-white text-lg font-semibold leading-8" />
                            </form>
                        </div>
                    </div>
              </div>

            
              <button class="swiper-tinder-button swiper-tinder-button-no">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                  <path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
                </svg>
              </button>
              <button class="swiper-tinder-button swiper-tinder-button-yes">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                  <path
                    d="m480-121-41-37q-106-97-175-167.5t-110-126Q113-507 96.5-552T80-643q0-90 60.5-150.5T290-854q57 0 105.5 27t84.5 78q42-54 89-79.5T670-854q89 0 149.5 60.5T880-643q0 46-16.5 91T806-451.5q-41 55.5-110 126T521-158l-41 37Z" />
                </svg>
              </button>
            </div>
          </div>

        </div>
    </div>
</section>

<script>
const params = [];

document.getElementById('form').addEventListener('submit', function(event) {
    const form = document.getElementById('form');

    // 追加するパラメータ
    const spots = JSON.stringify(params);
    
    // hidden input要素を作成して日時を追加
    const hiddenInput = document.createElement('input');
    hiddenInput.type = 'hidden';
    hiddenInput.name = 'likeSpots';
    hiddenInput.value = spots;
    
    form.appendChild(hiddenInput);
});

// JavaScriptの一部として、Likeボタンのクリックイベントを設定する
document.querySelectorAll('.swiper-tinder-button-yes').forEach(button => {
    button.addEventListener('click', function() {
        // クリックされた投稿のIDを取得する
        const currentSlide = document.querySelector('.swiper-slide-visible');
        let postId = currentSlide.querySelector('.postid-hidden').value;
        let latitude = currentSlide.querySelector('.latitude-hidden').value;
        let longitude = currentSlide.querySelector('.longitude-hidden').value;
        let url = currentSlide.querySelector('.img-hidden').value;

        console.log(postId, latitude, longitude);
        params.push({ postId: postId, latitude: latitude, longitude: longitude, url: url });

        // データを次のページに送信する（例：クエリパラメータを使用）
        // window.location.href = `/guide/${postId}?lat=${latitude}&long=${longitude}`;
    });
});
</script>

@include('layouts.footer')