<header class="sticky top-0 z-[1000] shadow-md font-[sans-serif] tracking-wide">
    <!-- <section class='flex items-center justify-between relative gap-4 py-3 sm:px-10 px-4 border-teal-700 bg-teal-700 border-b min-h-[75px]'> -->
    <section class="max-w-screen-xl bg-teal-700 text-white px-4 py-4">
        <!-- Kontainer Utama -->
    <div class="flex items-center justify-between max-w-7xl mx-auto">
        <!-- Bagian Logo -->
        <div class="flex items-center gap-4">
            <img src="logo.png" alt="logo" height="35" width="147" alt="RSI Masyithoh Logo"/>
            <img src="logokarsbaru.png" alt="logo" height="35" width="35"/>
            <img src="logoykmnubaru.png" alt="logo" height="35" width="35"/>
        </div>

        <!-- Search Box -->
        <div class="relative flex-1 max-w-md mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 w-5 h-5 -translate-y-1/2 text-gray-400"
                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21L16.65 16.65M10.5 10.5A6 6 0 1016.5 4.5 6 6 0 0010.5 10.5z" />
            </svg>
            <input type="text" placeholder="Search"
                class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:ring-2 focus:ring-teal-500">
        </div>

        <!-- Bagian Bookmark dan Login -->
        <div class="flex items-center gap-4">
            <div class="relative">
                <a href="bookmark.html">
            <span class="relative">
              <img src="bookmark.svg">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" class="cursor-pointer fill-white hover:fill-teal-100 inline-block" viewBox="0 0 512 512">
                    <path d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm167 15c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0" data-original="#000000"></path>
                </svg> -->
                <span class="absolute left-auto -ml-1 top-0 rounded-full bg-white px-1 py-0 text-xs text-black">4</span>
            </span>
          </a>
            </div>
            <div class="flex">
                <button class='px-4 py-2 text-[15px] rounded-full font-semibold text-teal-800 border-2 border-teal-500 bg-white hover:bg-teal-900 hover:text-white'>
                    Login
                </button>
            </div>
        </div>
    </div>
    </section>
      
        <div class='flex flex-wrap justify-center px-10 py-3 relative bg-white'>
      
          <div id="collapseMenu"
            class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-white max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50'>
            <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                <path
                  d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                  data-original="#000000"></path>
                <path
                  d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                  data-original="#000000"></path>
              </svg>
            </button>
      
            <ul
              class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
              <li class='max-lg:border-b max-lg:pb-4 px-3 lg:hidden'>
                <a href="javascript:void(0)"><img src="logobaru.png" alt="logo" class='w-36' />
                </a>
              </li>
              <li class='max-lg:border-b max-lg:px-3 max-lg:py-3'>
                <a href='{{ route('home') }}'
                  class='hover:text-teal-700 text-gray-700 font-semibold block text-[15px]'>Home</a></li>
              <li class='group max-lg:border-b max-lg:px-3 max-lg:py-3 relative'>
                <a href='javascript:void(0)'
                  class='hover:text-teal-700 text-gray-700 font-semibold text-[15px] block'>Ebook
                  <svg
                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block fill-gray-700"
                    viewBox="0 0 24 24">
                    <path
                      d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                      data-name="16" data-original="#000000" />
                  </svg>
                </a>
                <ul
                      class='absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[250px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                      <li class='border-b py-2 '><a href='{{ route('ebook') }}'
                          class='hover:text-teal-700 text-gray-700 hover:fill-teal-500 text-[15px] font-bold block'>Neurologi</a></li>
                      <li class='border-b py-2 '><a href='javascript:void(0)'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Psikologi</a></li>
                      <li class='border-b py-2 '><a href='javascript:void(0)'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Mikrobiologi</a></li>
                      <li class='border-b py-2 '><a href='javascript:void(0)'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Dermatologi</a></li>
                    </ul>
              </li>

              <li class='group max-lg:border-b max-lg:py-3 max-lg:px-3 relative'>
                  <a href='javascript:void(0)'
                    class='hover:text-teal-700 text-gray-700 hover:fill-teal-500 font-semibold text-[15px] block'>
                      Audio
                      <svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                        viewBox="0 0 24 24">
                        <path
                          d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                          data-name="16" data-original="#000000" />
                      </svg>
                    </a>
                    <ul
                      class='absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[250px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                      <li class='border-b py-2 '><a href='audio.html'
                          class='hover:text-teal-700 text-gray-700 hover:fill-teal-500 text-[15px] font-bold block'>Neurologi</a></li>
                      <li class='border-b py-2 '><a href='audio.html'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Psikologi</a></li>
                      <li class='border-b py-2 '><a href='audio.html'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Mikrobiologi</a></li>
                      <li class='border-b py-2 '><a href='audio.html'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Dermatologi</a></li>
                    </ul>
              </li>
                  
              <li class='group max-lg:border-b max-lg:py-3 max-lg:px-3 relative'>
                  <a href='javascript:void(0)'
                    class='hover:text-teal-700 text-gray-700 hover:fill-teal-500 font-semibold text-[15px] block'>
                      Video
                      <svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                        viewBox="0 0 24 24">
                        <path
                          d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                          data-name="16" data-original="#000000" />
                      </svg>
                    </a>
                    <ul
                      class='absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[250px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                      <li class='border-b py-2 '><a href='video2.html'
                          class='hover:text-teal-700 text-gray-700 hover:fill-teal-500 text-[15px] font-bold block'>Neurologi</a></li>
                      <li class='border-b py-2 '><a href='video2.html'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Psikologi</a></li>
                      <li class='border-b py-2 '><a href='video2.html'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Mikrobiologi</a></li>
                      <li class='border-b py-2 '><a href='video2.html'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Dermatologi</a></li>
                    </ul>
              </li>

              <li class='group max-lg:border-b max-lg:py-3 max-lg:px-3 relative'>
                    <a href='javascript:void(0)'
                      class='hover:text-teal-700 text-gray-700 hover:fill-teal-500 font-semibold text-[15px] block'>
                      Dokumen
                      <svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                        viewBox="0 0 24 24">
                        <path
                          d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                          data-name="16" data-original="#000000" />
                      </svg>
                    </a>
                    <ul
                      class='absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[250px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                      <li class='border-b py-2 '><a href='dokumen.html'
                          class='hover:text-teal-700 text-gray-700 hover:fill-teal-500 text-[15px] font-bold block'>Neurologi</a></li>
                      <li class='border-b py-2 '><a href='dokumen.html'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Psikologi</a></li>
                      <li class='border-b py-2 '><a href='dokumen.html'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Mikrobiologi</a></li>
                      <li class='border-b py-2 '><a href='dokumen.html'
                          class='hover:text-teal-700 text-gray-700 text-[15px] font-bold block'>Dermatologi</a></li>
                    </ul>
                  </li>
      
            </ul>
          </div>
      
          <div id="toggleOpen" class='flex ml-auto lg:hidden'>
            <button>
              <svg class="w-7 h-7 fill-teal-600" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
        </div>
</header>

<script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
      if (collapseMenu.style.display === 'block') {
        collapseMenu.style.display = 'none';
      } else {
        collapseMenu.style.display = 'block';
      }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);
</script>