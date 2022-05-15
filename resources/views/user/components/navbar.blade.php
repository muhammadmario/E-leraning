<nav class="nav flex flex-wrap items-center justify-between px-4 lg:px-0 sticky top-0 z-[999] bg-white border-b-2">
    <div class="flex flex-no-shrink items-center mr-6 py-3 text-grey-darkest">
      <img src="{{ asset('image/atensi-logo.png') }}" alt="logo" class="h-14 w-14 p-1 lg:p-0 ml-3 lg:ml-0">
    </div>
  
    <input class="menu-btn hidden" type="checkbox" id="menu-btn">
    <label class="menu-icon block cursor-pointer md:hidden px-2 py-4 relative select-none" for="menu-btn">
      <span class="navicon bg-grey-darkest flex items-center relative"></span>
    </label>
  
    <ul class="menu border-b md:border-none flex justify-end list-reset m-0 w-full md:w-auto md:mr-3 lg:mr-0 " >
      <li class="border-t md:border-none ">
        <a href="/" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker {{ (request()->is('/'))  ? 'font-bold' : '' }}">Home</a>
      </li>
      
      <li class="border-t md:border-none ">
        <a href="/kelas" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker {{ (request()->is('kelas*'))  ? 'font-bold' : '' }}">Kelas</a>
      </li>
      
      <li class="border-t md:border-none ">
        <a href="/galeri" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker {{ (request()->is('galeri*'))  ? 'font-bold' : '' }}">Galeri</a>
      </li>

      <li class="border-t md:border-none ">
        <a href="/lokasi" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker {{ (request()->is('lokasi*'))  ? 'font-bold' : '' }}">Lokasi</a>
      </li>

      <li class="border-t md:border-none ">
        <a href="/tentang-kami" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker {{ (request()->is('tentang-kami*'))  ? 'font-bold' : '' }}">Tentang Kami</a>
      </li>

      @auth
        @if (auth()->user()->role == 1 || auth()->user()->role == 2 )
        <li class="border-t md:border-none ">
            <a href="/dashboard" class=" block md:hidden px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Dashboard</a>
        </li>
        @endif
      @endauth

      <li class="border-t md:border-none ">
        <form action="/logout" method="POST">
          @csrf
          <button class="w-full md:hidden bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Logout</button>
        </form>
      </li>

      <div class="border-r-2 mr-3 border-black hidden md:inline-block"></div>

      @auth
      {{-- <li class="border-t md:border-none bg-black rounded-md h-min my-auto">
        <a href="/logout" class="block md:inline-block px-4 py-2 no-underline text-grey-darkest hover:text-grey-darker text-white">Logout</a>
      </li> --}}
      <div class="hidden md:block">
        <h1 class="font-base text-sm text-slate-400 my-auto">Hello</h1>
        <h1 class="font-semibold text-sm text-slate-600 my-auto">{{ auth()->user()->username }}</h1> 
      </div>
      <div class="p-2 hidden md:block">
          <div class="dropdown inline-block relative group">
            <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
            </button>
            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 group-hover:block">
              @if (auth()->user()->role == 1 || auth()->user()->role == 2 )
              <li>      
                <a href="/dashboard" class="w-full bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Dashboard</a>
              </li>
              @else
              <li>      
                <a href="/chat" class="w-full bg-gray-200 hover:bg-gray-400 py-2 px-4 flex justify-center items-center whitespace-no-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-black-400 hover:text-black-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                  </svg> Pesan
                </a>
              </li>
              @endif
              
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button class="w-full bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Logout</button>
                </form>
              </li>
            </ul>
          </div>  
      </div>
      @else   
      <li class="border-t md:border-none bg-black rounded-md h-min my-auto">
        <a href="/login" class="block md:inline-block px-4 py-2 no-underline text-grey-darkest hover:text-grey-darker text-white">Login</a>
      </li>
      @endauth 
    </ul>
  </nav>