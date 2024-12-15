@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="bg-blue-500 text-white font-bold">Tes Tailwind</div>
<div class="max-w-screen-xl py-2 space-y-12 px-4 lg:space-y-10 lg:py-2 lg:px-6 bg-teal-700 font-[sans-serif] mx-auto">
        <div class="grid md:grid-cols-2 items-center md:gap-10 gap-6">
          <div class="max-md:order-1 max-md:text-center">
            <!-- <p class="mt-4 text-sm font-bold text-blue-600"><span class="rotate-90 inline-block mr-2 mb-2">|</span> ALL IN ONE MEETING SCHEDULER</p> -->
            <h2 class="max-w-screen-lg text-white md:text-5xl text-3xl font-extrabold mb-4 md:!leading-[55px]">Perpustakaan Online
              <br>Rumah Sakit Islam Masyithoh</h2>
          </div>
  
          <div class="md:h-[400px] p-2">
            <img src="hero.png" class="w-full h-full object-contain rounded-lg" alt="Perpusatakaan Digital" />
          </div>
        </div>
  
      </div>

      <!-- section ebook -->
      <section class="py-8 px-8">
        <!-- Judul Section -->
        <div class="max-w-screen-xl py-4 space-y-12 mx-auto px-4 lg:space-y-6 lg:py-5 lg:px-6">
          <h2 class="ml-2 text-xl font-bold text-gray-900">EBOOKS</h2>
          
          <!-- Grid Cards -->
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 mt-2">
            <!-- Card 1 -->
              <div class="max-w-sm w-full bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:shadow-green-100 hover:scale-105">
                <a href="ebookdetail.html" class="block">
                    <div class="bg-gray-200 h-56 flex justify-center items-center">
                        <img src="buku.png" alt="Biotika Kedokteran" class="object-cover h-full py-2">
                    </div>
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Ebooks</p>
                        <h3 class="text-lg font-semibold text-gray-900">Biotika Kedokteran</h3>
                        <p class="text-sm text-teal-600">dr. W. Rainoldy Wangi..</p>
                    </div>
                </a>

                <div class="flex justify-end p-2 bg-white">
                    <button id="bookmarkButton" onclick="toggleBookmark(event)" class="group text-gray-500 transition-colors duration-200">
                        <svg id="bookmarkIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                            class="w-6 h-6 group-hover:fill-teal-700 group-hover:text-teal-700 group-active:fill-teal-900 group-active:text-teal-900">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 3v18l6.75-4.5 6.75 4.5V3a1.5 1.5 0 00-1.5-1.5H6.75A1.5 1.5 0 005.25 3z" />
                        </svg>
                    </button>
                </div>
              </div>
      
            <!-- Card 2 (Duplicate as needed for more cards) -->
            <div class="max-w-sm w-full bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:shadow-green-100 hover:scale-105">
                <a href="ebookdetail.html" class="block">
                    <div class="bg-gray-200 h-56 flex justify-center items-center">
                        <img src="buku.png" alt="Biotika Kedokteran" class="object-cover h-full py-2">
                    </div>
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Ebooks</p>
                        <h3 class="text-lg font-semibold text-gray-900">Biotika Kedokteran</h3>
                        <p class="text-sm text-teal-600">dr. W. Rainoldy Wangi..</p>
                    </div>
                </a>

                <div class="flex justify-end p-2 bg-white">
                    <button id="bookmarkButton" onclick="toggleBookmark(event)" class="group text-gray-500 transition-colors duration-200">
                        <svg id="bookmarkIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                            class="w-6 h-6 group-hover:fill-teal-700 group-hover:text-teal-700 group-active:fill-teal-900 group-active:text-teal-900">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 3v18l6.75-4.5 6.75 4.5V3a1.5 1.5 0 00-1.5-1.5H6.75A1.5 1.5 0 005.25 3z" />
                        </svg>
                    </button>
                </div>
              </div>
      
            <!-- Card 3 -->
            <div class="max-w-sm w-full bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:shadow-green-100 hover:scale-105">
                <a href="ebookdetail.html" class="block">
                    <div class="bg-gray-200 h-56 flex justify-center items-center">
                        <img src="buku.png" alt="Biotika Kedokteran" class="object-cover h-full py-2">
                    </div>
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Ebooks</p>
                        <h3 class="text-lg font-semibold text-gray-900">Biotika Kedokteran</h3>
                        <p class="text-sm text-teal-600">dr. W. Rainoldy Wangi..</p>
                    </div>
                </a>

                <div class="flex justify-end p-2 bg-white">
                    <button id="bookmarkButton" onclick="toggleBookmark(event)" class="group text-gray-500 transition-colors duration-200">
                        <svg id="bookmarkIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                            class="w-6 h-6 group-hover:fill-teal-700 group-hover:text-teal-700 group-active:fill-teal-900 group-active:text-teal-900">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 3v18l6.75-4.5 6.75 4.5V3a1.5 1.5 0 00-1.5-1.5H6.75A1.5 1.5 0 005.25 3z" />
                        </svg>
                    </button>
                </div>
              </div>
      
            <!-- Card 4 -->
            <div class="max-w-sm w-full bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:shadow-green-100 hover:scale-105">
                <a href="ebookdetail.html" class="block">
                    <div class="bg-gray-200 h-56 flex justify-center items-center">
                        <img src="buku.png" alt="Biotika Kedokteran" class="object-cover h-full py-2">
                    </div>
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Ebooks</p>
                        <h3 class="text-lg font-semibold text-gray-900">Biotika Kedokteran</h3>
                        <p class="text-sm text-teal-600">dr. W. Rainoldy Wangi..</p>
                    </div>
                </a>

                <div class="flex justify-end p-2 bg-white">
                    <button id="bookmarkButton" onclick="toggleBookmark(event)" class="group text-gray-500 transition-colors duration-200">
                        <svg id="bookmarkIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                            class="w-6 h-6 group-hover:fill-teal-700 group-hover:text-teal-700 group-active:fill-teal-900 group-active:text-teal-900">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 3v18l6.75-4.5 6.75 4.5V3a1.5 1.5 0 00-1.5-1.5H6.75A1.5 1.5 0 005.25 3z" />
                        </svg>
                    </button>
                </div>
              </div>

            <!-- cards 5 -->
            <div class="max-w-sm w-full bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:shadow-green-100 hover:scale-105">
                <a href="ebookdetail.html" class="block">
                    <div class="bg-gray-200 h-56 flex justify-center items-center">
                        <img src="buku.png" alt="Biotika Kedokteran" class="object-cover h-full py-2">
                    </div>
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Ebooks</p>
                        <h3 class="text-lg font-semibold text-gray-900">Biotika Kedokteran</h3>
                        <p class="text-sm text-teal-600">dr. W. Rainoldy Wangi..</p>
                    </div>
                </a>

                <div class="flex justify-end p-2 bg-white">
                    <button id="bookmarkButton" onclick="toggleBookmark(event)" class="group text-gray-500 transition-colors duration-200">
                        <svg id="bookmarkIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                            class="w-6 h-6 group-hover:fill-teal-700 group-hover:text-teal-700 group-active:fill-teal-900 group-active:text-teal-900">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 3v18l6.75-4.5 6.75 4.5V3a1.5 1.5 0 00-1.5-1.5H6.75A1.5 1.5 0 005.25 3z" />
                        </svg>
                    </button>
                </div>
              </div>

          </div>
        </div>
      </section>

      <!-- section audio -->
      <section class="py-2 px-8">
        <!-- Judul Section -->
        <div class="max-w-screen-xl py-2 mx-auto px-4 lg:py-2 lg:px-6">
            <h2 class="ml-2 text-xl font-bold text-gray-900">AUDIO</h2>

            <!-- Grid Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 mt-6">
                <!-- Card 1 -->
                <div class="max-w-sm w-full bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:shadow-green-100 hover:scale-105">
                <a href="audiodetail.html" class="block">
                    <div class="bg-gray-200 h-56 flex justify-center items-center">
                        <img src="audio.png" alt="Biotika Kedokteran" class="object-cover h-full py-2">
                    </div>
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Audio</p>
                        <h3 class="text-lg font-semibold text-gray-900">Medical Terminology</h3>
                        <p class="text-sm text-teal-600">Beverley Henderson</p>
                    </div>
                </a>

                <div class="flex justify-end p-2 bg-white">
                    <button id="bookmarkButton" onclick="toggleBookmark(event)" class="group text-gray-500 transition-colors duration-200">
                        <svg id="bookmarkIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                            class="w-6 h-6 group-hover:fill-teal-700 group-hover:text-teal-700 group-active:fill-teal-900 group-active:text-teal-900">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 3v18l6.75-4.5 6.75 4.5V3a1.5 1.5 0 00-1.5-1.5H6.75A1.5 1.5 0 005.25 3z" />
                        </svg>
                    </button>
                </div>
              </div>

                <!-- Card 2 -->
                <div class="max-w-sm w-full bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:shadow-green-100 hover:scale-105">
                  <a href="audiodetail.html" class="block">
                    <div class="bg-gray-200 h-56 flex justify-center items-center">
                        <img src="audio.png" alt="Biotika Kedokteran" class="object-cover h-full py-2">
                    </div>
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Audio</p>
                        <h3 class="text-lg font-semibold text-gray-900">Medical Terminology</h3>
                        <p class="text-sm text-teal-600">Beverley Henderson</p>
                    </div>
                  </a>

                    <div class="flex justify-end p-2 bg-white">
                      <button id="bookmarkButton" onclick="toggleBookmark()" class="group text-gray-500 transition-colors duration-200">
                          <svg id="bookmarkIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                                class="w-6 h-6 group-hover:fill-teal-700 group-hover:text-teal-700 group-active:fill-teal-900 group-active:text-teal-900">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 3v18l6.75-4.5 6.75 4.5V3a1.5 1.5 0 00-1.5-1.5H6.75A1.5 1.5 0 005.25 3z" />
                          </svg>
                      </button>
                  </div>
                </div>

                <!-- Card 3 -->
                <div class="max-w-sm w-full bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:shadow-green-100 hover:scale-105">
                    <a href="audiodetail.html" class="block">
                    <div class="bg-gray-200 h-56 flex justify-center items-center">
                        <img src="audio.png" alt="Biotika Kedokteran" class="object-cover h-full py-2">
                    </div>
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Audio</p>
                        <h3 class="text-lg font-semibold text-gray-900">Medical Terminology</h3>
                        <p class="text-sm text-teal-600">Beverley Henderson</p>
                    </div>
                  </a>

                    <div class="flex justify-end p-2 bg-white">
                      <button id="bookmarkButton" onclick="toggleBookmark()" class="group text-gray-500 transition-colors duration-200">
                          <svg id="bookmarkIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                                class="w-6 h-6 group-hover:fill-teal-700 group-hover:text-teal-700 group-active:fill-teal-900 group-active:text-teal-900">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 3v18l6.75-4.5 6.75 4.5V3a1.5 1.5 0 00-1.5-1.5H6.75A1.5 1.5 0 005.25 3z" />
                          </svg>
                      </button>
                  </div>
                </div>

      
              <!-- Card 4 -->
              <div class="max-w-sm w-full bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:shadow-green-100 hover:scale-105">
                  <a href="audiodetail.html" class="block">
                    <div class="bg-gray-200 h-56 flex justify-center items-center">
                        <img src="audio.png" alt="Biotika Kedokteran" class="object-cover h-full py-2">
                    </div>
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Audio</p>
                        <h3 class="text-lg font-semibold text-gray-900">Medical Terminology</h3>
                        <p class="text-sm text-teal-600">Beverley Henderson</p>
                    </div>
                  </a>

                    <div class="flex justify-end p-2 bg-white">
                      <button id="bookmarkButton" onclick="toggleBookmark()" class="group text-gray-500 transition-colors duration-200">
                          <svg id="bookmarkIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                                class="w-6 h-6 group-hover:fill-teal-700 group-hover:text-teal-700 group-active:fill-teal-900 group-active:text-teal-900">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 3v18l6.75-4.5 6.75 4.5V3a1.5 1.5 0 00-1.5-1.5H6.75A1.5 1.5 0 005.25 3z" />
                          </svg>
                      </button>
                  </div>
                </div>

              <!-- cards 5 -->
              <div class="max-w-sm w-full bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:shadow-green-100 hover:scale-105">
                  <a href="audiodetail.html" class="block">
                    <div class="bg-gray-200 h-56 flex justify-center items-center">
                        <img src="audio.png" alt="Biotika Kedokteran" class="object-cover h-full py-2">
                    </div>
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Audio</p>
                        <h3 class="text-lg font-semibold text-gray-900">Medical Terminology</h3>
                        <p class="text-sm text-teal-600">Beverley Henderson</p>
                    </div>
                  </a>

                    <div class="flex justify-end p-2 bg-white">
                      <button id="bookmarkButton" onclick="toggleBookmark()" class="group text-gray-500 transition-colors duration-200">
                          <svg id="bookmarkIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                                class="w-6 h-6 group-hover:fill-teal-700 group-hover:text-teal-700 group-active:fill-teal-900 group-active:text-teal-900">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 3v18l6.75-4.5 6.75 4.5V3a1.5 1.5 0 00-1.5-1.5H6.75A1.5 1.5 0 005.25 3z" />
                          </svg>
                      </button>
                  </div>
                </div>
          </div>
        </div>
      </section>

@endsection