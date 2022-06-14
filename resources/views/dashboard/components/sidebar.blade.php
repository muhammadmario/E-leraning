<div class="bg-sky-500 flex justify-between md:hidden fixed top-0 right-0 left-0">
    <img src="{{ asset('image/atensi-logo.png') }}" alt="logo" class="h-14 w-14 p-2 ml-3">
    <button class="mobile-menu-button mr-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd" />
          </svg>
    </button>
</div>

<div class="sidebar z-[100] h-screen overflow-y-auto no-scrollbar bg-white w-64 space-y-6 py-1 px-2 absolute inset-y-0 left-0 top-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
    <div class="flex md:justify-center">
        <a href="/">
            <img src="{{ asset('image/atensi-logo.png') }}" alt="logo" class="h-14 w-14 p-2 ml-3 md:ml-0 md:p-0 md:mt-3 hidden md:block">
        </a>
    </div>
    <ul class="flex px-4 md:px-3 flex-col mt-1 gap-1 lg:gap-1" >  
        @if (auth()->user()->role==1)
        <a href="/dashboard">
            <li class="{{ (request()->is('dashboard'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-1 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class=" h-5 w-5 lg:h-6 lg:w-6 group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                </svg>
                <h3 class="group-hover:text-white font-medium text-sm lg:text-base">Dashboard</h3>
            </li>
        </a> 
        <h2 class="text-slate-600 text-xs md:text-sm md:font-medium md:px-3">Menu</h2>
        <a href="/dashboard/kelas">
            <li class="{{ (request()->is('dashboard/kelas*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class=" h-5 w-5 lg:h-6 lg:w-6 group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Kelas</h3>
            </li>
        </a>
        <a href="/dashboard/kategori">
            <li class="{{ (request()->is('dashboard/kategori*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Kategori</h3>
            </li>
        </a>
        <a href="/dashboard/materi">
            <li class="{{ (request()->is('dashboard/materi*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Materi</h3>
            </li>
        </a>
        <h2 class="text-slate-600 text-xs md:text-sm md:font-medium md:px-3">Kustom</h2>
        <a href="/dashboard/video-homepage">
            <li class="{{ (request()->is('dashboard/video-homepage*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm11 1H6v8l4-2 4 2V6z" clip-rule="evenodd" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Video Homepage</h3>
            </li>
        </a>
        <a href="/dashboard/gallery">
            <li class="{{ (request()->is('dashboard/gallery*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Gallery</h3>
            </li>
        </a>
        <a href="/dashboard/testimonial">
            <li class="{{ (request()->is('dashboard/testimonial*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Testimoni</h3>
            </li>
        </a>
        <a href="/dashboard/comment">
            <li class="{{ (request()->is('dashboard/comment*')) ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Komentar</h3>
            </li>
        </a>
        <h2 class="text-slate-600 text-xs md:text-sm md:font-medium md:px-3">Akun</h2>
        <a href="/dashboard/register">
            <li class="{{ (request()->is('dashboard/register*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-1 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Register Akun</h3>
            </li>
        </a>
        <a href="/dashboard/akun">
            <li class="{{ (request()->is('dashboard/akun*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Akun</h3>
            </li>
        </a>
        <h2 class="text-slate-600 text-xs md:text-sm md:font-medium md:px-3">Chat</h2>
          <a href="/dashboard/pesan">
            <li class="{{ (request()->is('dashboard/pesan*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Pesan</h3>
            </li>
        </a>
        @else
        <a href="/dashboard">
            <li class="{{ (request()->is('dashboard'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-1 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class=" h-5 w-5 lg:h-6 lg:w-6 group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                </svg>
                <h3 class="group-hover:text-white font-medium text-sm lg:text-base">Dashboard</h3>
            </li>
        </a> 
        <h2 class="text-slate-600 text-xs md:text-sm md:font-medium md:px-3">Menu</h2>
        <a href="/dashboard/kelas">
            <li class="{{ (request()->is('dashboard/kelas*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class=" h-5 w-5 lg:h-6 lg:w-6 group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Kelas</h3>
            </li>
        </a>
        <a href="/dashboard/kategori">
            <li class="{{ (request()->is('dashboard/kategori*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Kategori</h3>
            </li>
        </a>
        <a href="/dashboard/materi">
            <li class="{{ (request()->is('dashboard/materi*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Materi</h3>
            </li>
        </a>
        <a href="/dashboard/comment">
            <li class="{{ (request()->is('dashboard/comment*')) ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Komentar</h3>
            </li>
        </a>
        <h2 class="text-slate-600 text-xs md:text-sm md:font-medium md:px-3">Akun</h2>
        <a href="/dashboard/register">
            <li class="{{ (request()->is('dashboard/register*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-1 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Register Akun</h3>
            </li>
        </a>
        <a href="/dashboard/akun">
            <li class="{{ (request()->is('dashboard/akun*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Akun</h3>
            </li>
        </a>
        <h2 class="text-slate-600 text-xs md:text-sm md:font-medium md:px-3">Chat</h2>
          <a href="/dashboard/pesan">
            <li class="{{ (request()->is('dashboard/pesan*'))  ? 'bg-sky-500 text-white' : 'bg-white text-slate-500' }} flex gap-2 cursor-pointer py-1 md:py-2 md:px-3 lg:py-3 hover:bg-sky-500  rounded-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6  group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd" />
                  </svg>
                <h3 class=" group-hover:text-white font-medium text-sm lg:text-base">Pesan</h3>
            </li>
        </a>
        @endif
       
    </ul>
</div>

