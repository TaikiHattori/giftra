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
                              <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                                <img src="img/1532065400.png">
                                <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">夫婦</p>
                                <input type="radio" name="who" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
                              </label>

                              <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                                <img src="img/1517364360.png">
                                <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">親子</p>
                                <input type="radio" name="who" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
                              </label>
                
                              <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                                <img src="img/1513142869.png">
                                <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">友達</p>
                                <input type="radio" name="who" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
                              </label>
                          </div>
                      </div>
                  </div>
              </div>


              <div class="mt-10">
                <h4 class="text-gray-900 text-xl font-semibold leading-loose">どのようなシチュエーションで利用しますか？</h4>
                <div class="w-full">
                    <div class="w-full">
                        <div class="w-full justify-start items-center gap-6 flex md:flex-row flex-col">
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                <g clip-path="url(#clip0_30847_81934)">
                                  <path d="M7.71003 22.6772C7.71003 24.7464 6.03759 26.4189 3.96829 26.4189C1.899 26.4189 0.226562 24.7464 0.226562 22.6772C0.226562 20.6079 1.899 18.9354 3.96829 18.9354H7.71003V22.6772ZM9.58089 22.6772C9.58089 20.6079 11.2533 18.9354 13.3226 18.9354C15.3919 18.9354 17.0644 20.6079 17.0644 22.6772V32.0315C17.0644 34.1008 15.3919 35.7732 13.3226 35.7732C11.2533 35.7732 9.58089 34.1008 9.58089 32.0315V22.6772Z" fill="#E01E5A"/>
                                  <path d="M13.3227 7.65351C11.2534 7.65351 9.58092 5.98107 9.58092 3.91178C9.58092 1.84248 11.2534 0.170044 13.3227 0.170044C15.3919 0.170044 17.0644 1.84248 17.0644 3.91178V7.65351H13.3227ZM13.3227 9.55272C15.3919 9.55272 17.0644 11.2252 17.0644 13.2945C17.0644 15.3637 15.3919 17.0362 13.3227 17.0362H3.93997C1.87068 17.0362 0.198242 15.3637 0.198242 13.2945C0.198242 11.2252 1.87068 9.55272 3.93997 9.55272H13.3227Z" fill="#36C5F0"/>
                                  <path d="M28.3182 13.2945C28.3182 11.2252 29.9906 9.55272 32.0599 9.55272C34.1292 9.55272 35.8017 11.2252 35.8017 13.2945C35.8017 15.3637 34.1292 17.0362 32.0599 17.0362H28.3182V13.2945ZM26.4473 13.2945C26.4473 15.3637 24.7749 17.0362 22.7056 17.0362C20.6363 17.0362 18.9639 15.3637 18.9639 13.2945V3.91178C18.9639 1.84248 20.6363 0.170044 22.7056 0.170044C24.7749 0.170044 26.4473 1.84248 26.4473 3.91178V13.2945Z" fill="#2EB67D"/>
                                  <path d="M22.7056 28.2898C24.7749 28.2898 26.4473 29.9622 26.4473 32.0315C26.4473 34.1008 24.7749 35.7732 22.7056 35.7732C20.6363 35.7732 18.9639 34.1008 18.9639 32.0315V28.2898H22.7056ZM22.7056 26.4189C20.6363 26.4189 18.9639 24.7464 18.9639 22.6772C18.9639 20.6079 20.6363 18.9354 22.7056 18.9354H32.0883C34.1576 18.9354 35.83 20.6079 35.83 22.6772C35.83 24.7464 34.1576 26.4189 32.0883 26.4189H22.7056Z" fill="#ECB22E"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_30847_81934">
                                    <rect width="36" height="36" fill="white"/>
                                  </clipPath>
                                </defs>
                            </svg>
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">休暇</p>
                              <input type="radio" name="situation" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
                            </label>

                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                <g clip-path="url(#clip0_30847_81934)">
                                  <path d="M7.71003 22.6772C7.71003 24.7464 6.03759 26.4189 3.96829 26.4189C1.899 26.4189 0.226562 24.7464 0.226562 22.6772C0.226562 20.6079 1.899 18.9354 3.96829 18.9354H7.71003V22.6772ZM9.58089 22.6772C9.58089 20.6079 11.2533 18.9354 13.3226 18.9354C15.3919 18.9354 17.0644 20.6079 17.0644 22.6772V32.0315C17.0644 34.1008 15.3919 35.7732 13.3226 35.7732C11.2533 35.7732 9.58089 34.1008 9.58089 32.0315V22.6772Z" fill="#E01E5A"/>
                                  <path d="M13.3227 7.65351C11.2534 7.65351 9.58092 5.98107 9.58092 3.91178C9.58092 1.84248 11.2534 0.170044 13.3227 0.170044C15.3919 0.170044 17.0644 1.84248 17.0644 3.91178V7.65351H13.3227ZM13.3227 9.55272C15.3919 9.55272 17.0644 11.2252 17.0644 13.2945C17.0644 15.3637 15.3919 17.0362 13.3227 17.0362H3.93997C1.87068 17.0362 0.198242 15.3637 0.198242 13.2945C0.198242 11.2252 1.87068 9.55272 3.93997 9.55272H13.3227Z" fill="#36C5F0"/>
                                  <path d="M28.3182 13.2945C28.3182 11.2252 29.9906 9.55272 32.0599 9.55272C34.1292 9.55272 35.8017 11.2252 35.8017 13.2945C35.8017 15.3637 34.1292 17.0362 32.0599 17.0362H28.3182V13.2945ZM26.4473 13.2945C26.4473 15.3637 24.7749 17.0362 22.7056 17.0362C20.6363 17.0362 18.9639 15.3637 18.9639 13.2945V3.91178C18.9639 1.84248 20.6363 0.170044 22.7056 0.170044C24.7749 0.170044 26.4473 1.84248 26.4473 3.91178V13.2945Z" fill="#2EB67D"/>
                                  <path d="M22.7056 28.2898C24.7749 28.2898 26.4473 29.9622 26.4473 32.0315C26.4473 34.1008 24.7749 35.7732 22.7056 35.7732C20.6363 35.7732 18.9639 34.1008 18.9639 32.0315V28.2898H22.7056ZM22.7056 26.4189C20.6363 26.4189 18.9639 24.7464 18.9639 22.6772C18.9639 20.6079 20.6363 18.9354 22.7056 18.9354H32.0883C34.1576 18.9354 35.83 20.6079 35.83 22.6772C35.83 24.7464 34.1576 26.4189 32.0883 26.4189H22.7056Z" fill="#ECB22E"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_30847_81934">
                                    <rect width="36" height="36" fill="white"/>
                                  </clipPath>
                                </defs>
                            </svg>
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">誕生日</p>
                              <input type="radio" name="situation" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
                            </label>
              
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                <g clip-path="url(#clip0_30847_81934)">
                                  <path d="M7.71003 22.6772C7.71003 24.7464 6.03759 26.4189 3.96829 26.4189C1.899 26.4189 0.226562 24.7464 0.226562 22.6772C0.226562 20.6079 1.899 18.9354 3.96829 18.9354H7.71003V22.6772ZM9.58089 22.6772C9.58089 20.6079 11.2533 18.9354 13.3226 18.9354C15.3919 18.9354 17.0644 20.6079 17.0644 22.6772V32.0315C17.0644 34.1008 15.3919 35.7732 13.3226 35.7732C11.2533 35.7732 9.58089 34.1008 9.58089 32.0315V22.6772Z" fill="#E01E5A"/>
                                  <path d="M13.3227 7.65351C11.2534 7.65351 9.58092 5.98107 9.58092 3.91178C9.58092 1.84248 11.2534 0.170044 13.3227 0.170044C15.3919 0.170044 17.0644 1.84248 17.0644 3.91178V7.65351H13.3227ZM13.3227 9.55272C15.3919 9.55272 17.0644 11.2252 17.0644 13.2945C17.0644 15.3637 15.3919 17.0362 13.3227 17.0362H3.93997C1.87068 17.0362 0.198242 15.3637 0.198242 13.2945C0.198242 11.2252 1.87068 9.55272 3.93997 9.55272H13.3227Z" fill="#36C5F0"/>
                                  <path d="M28.3182 13.2945C28.3182 11.2252 29.9906 9.55272 32.0599 9.55272C34.1292 9.55272 35.8017 11.2252 35.8017 13.2945C35.8017 15.3637 34.1292 17.0362 32.0599 17.0362H28.3182V13.2945ZM26.4473 13.2945C26.4473 15.3637 24.7749 17.0362 22.7056 17.0362C20.6363 17.0362 18.9639 15.3637 18.9639 13.2945V3.91178C18.9639 1.84248 20.6363 0.170044 22.7056 0.170044C24.7749 0.170044 26.4473 1.84248 26.4473 3.91178V13.2945Z" fill="#2EB67D"/>
                                  <path d="M22.7056 28.2898C24.7749 28.2898 26.4473 29.9622 26.4473 32.0315C26.4473 34.1008 24.7749 35.7732 22.7056 35.7732C20.6363 35.7732 18.9639 34.1008 18.9639 32.0315V28.2898H22.7056ZM22.7056 26.4189C20.6363 26.4189 18.9639 24.7464 18.9639 22.6772C18.9639 20.6079 20.6363 18.9354 22.7056 18.9354H32.0883C34.1576 18.9354 35.83 20.6079 35.83 22.6772C35.83 24.7464 34.1576 26.4189 32.0883 26.4189H22.7056Z" fill="#ECB22E"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_30847_81934">
                                    <rect width="36" height="36" fill="white"/>
                                  </clipPath>
                                </defs>
                            </svg>
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">結婚</p>
                              <input type="radio" name="situation" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
                            </label>

                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                <g clip-path="url(#clip0_30847_81934)">
                                  <path d="M7.71003 22.6772C7.71003 24.7464 6.03759 26.4189 3.96829 26.4189C1.899 26.4189 0.226562 24.7464 0.226562 22.6772C0.226562 20.6079 1.899 18.9354 3.96829 18.9354H7.71003V22.6772ZM9.58089 22.6772C9.58089 20.6079 11.2533 18.9354 13.3226 18.9354C15.3919 18.9354 17.0644 20.6079 17.0644 22.6772V32.0315C17.0644 34.1008 15.3919 35.7732 13.3226 35.7732C11.2533 35.7732 9.58089 34.1008 9.58089 32.0315V22.6772Z" fill="#E01E5A"/>
                                  <path d="M13.3227 7.65351C11.2534 7.65351 9.58092 5.98107 9.58092 3.91178C9.58092 1.84248 11.2534 0.170044 13.3227 0.170044C15.3919 0.170044 17.0644 1.84248 17.0644 3.91178V7.65351H13.3227ZM13.3227 9.55272C15.3919 9.55272 17.0644 11.2252 17.0644 13.2945C17.0644 15.3637 15.3919 17.0362 13.3227 17.0362H3.93997C1.87068 17.0362 0.198242 15.3637 0.198242 13.2945C0.198242 11.2252 1.87068 9.55272 3.93997 9.55272H13.3227Z" fill="#36C5F0"/>
                                  <path d="M28.3182 13.2945C28.3182 11.2252 29.9906 9.55272 32.0599 9.55272C34.1292 9.55272 35.8017 11.2252 35.8017 13.2945C35.8017 15.3637 34.1292 17.0362 32.0599 17.0362H28.3182V13.2945ZM26.4473 13.2945C26.4473 15.3637 24.7749 17.0362 22.7056 17.0362C20.6363 17.0362 18.9639 15.3637 18.9639 13.2945V3.91178C18.9639 1.84248 20.6363 0.170044 22.7056 0.170044C24.7749 0.170044 26.4473 1.84248 26.4473 3.91178V13.2945Z" fill="#2EB67D"/>
                                  <path d="M22.7056 28.2898C24.7749 28.2898 26.4473 29.9622 26.4473 32.0315C26.4473 34.1008 24.7749 35.7732 22.7056 35.7732C20.6363 35.7732 18.9639 34.1008 18.9639 32.0315V28.2898H22.7056ZM22.7056 26.4189C20.6363 26.4189 18.9639 24.7464 18.9639 22.6772C18.9639 20.6079 20.6363 18.9354 22.7056 18.9354H32.0883C34.1576 18.9354 35.83 20.6079 35.83 22.6772C35.83 24.7464 34.1576 26.4189 32.0883 26.4189H22.7056Z" fill="#ECB22E"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_30847_81934">
                                    <rect width="36" height="36" fill="white"/>
                                  </clipPath>
                                </defs>
                            </svg>
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">銀婚式</p>
                              <input type="radio" name="situation" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
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
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">30代以下</p>
                              <input type="radio" name="age" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
                            </label>

                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">40代</p>
                              <input type="radio" name="age" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
                            </label>
              
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">50代</p>
                              <input type="radio" name="age" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
                            </label>
              
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">60代</p>
                              <input type="radio" name="age" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
                            </label>
              
                            <label class="w-full p-6 rounded-2xl border border-gray-200 hover:border-orange-600 hover:bg-orange-50 transition-all duration-700 ease-in-out flex-col justify-start items-center gap-3 inline-flex cursor-pointer has-[:checked]:ring-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:border-orange-500 has-[:checked]:ring-orange-500"">
                              <p class="text-center text-gray-900 text-base font-semibold leading-relaxed">70代以上</p>
                              <input type="radio" name="age" value="" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-orange-950/10 checked:border-orange-500 checked:ring-orange-500" required>
                            </label>
                        </div>
                    </div>
                </div>


            </div>


              <button class="mx-auto mt-10 sm:w-fit w-full px-9 py-3 bg-orange-600 hover:bg-orange-700 ease-in-out transition-all duration-700 rounded-xl shadow justify-center items-center flex">
                  <span class="px-3.5 text-center text-white text-lg font-semibold leading-8">次に進む</span>
              </button>
          </div>
          </form>
      </div>
  </section>


</body>
</html>