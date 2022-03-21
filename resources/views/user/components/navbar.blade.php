<nav class="nav flex flex-wrap items-center justify-between px-4 lg:px-0 sticky top-0 z-50 bg-white border-b-2">
    <div class="flex flex-no-shrink items-center mr-6 py-3 text-grey-darkest">
      <img src="{{ asset('image/atensi-logo.png') }}" alt="logo" class="h-14 w-14 p-1 lg:p-0 ml-3 lg:ml-0">
    </div>
  
    <input class="menu-btn hidden" type="checkbox" id="menu-btn">
    <label class="menu-icon block cursor-pointer md:hidden px-2 py-4 relative select-none" for="menu-btn">
      <span class="navicon bg-grey-darkest flex items-center relative"></span>
    </label>
  
    <ul class="menu border-b md:border-none flex justify-end list-reset m-0 w-full md:w-auto md:mr-3 lg:mr-0">
      <li class="border-t md:border-none">
        <a href="/" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold">Home</a>
      </li>
      
      <li class="border-t md:border-none">
        <a href="/kelas" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Kelas</a>
      </li>
      
      <li class="border-t md:border-none">
        <a href="/galeri" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Galeri</a>
      </li>

      <li class="border-t md:border-none">
        <a href="/lokasi" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Lokasi</a>
      </li>

      <li class="border-t md:border-none">
        <a href="/tentang-kami" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker">Tentang Kami</a>
      </li>

      <div class="border-r-2 mr-3 border-black hidden md:inline-block"></div>

      <li class="border-t md:border-none bg-black rounded-md h-min my-auto">
        <a href="/login" class="block md:inline-block px-4 py-2 no-underline text-grey-darkest hover:text-grey-darker text-white">Sign in</a>
      </li>
    </ul>
  </nav>