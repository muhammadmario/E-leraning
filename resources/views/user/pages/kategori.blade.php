@extends('user.components.main')

@section('content')
<div class="flex flex-col">
   <div class="flex justify-center mt-3">
      <div class=" w-full px-2 md:px-0 md:w-1/2">
        <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
          <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black focus:outline-none" placeholder="Telusuri" aria-label="Search" aria-describedby="button-addon2">
          <button class="btn px-6 py-2.5 bg-black text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
            </svg>
          </button>
        </div>
      </div>
   </div>
   <h1 class="text-2xl md:text-3xl font-light">Kelas : Makanan</h1>
   <div class="grid grid-cols-1 md:grid-cols-2 mt-2">
      <a href="/kelas/makanan/nastar">
         <div class="h-44 md:h-52 lg:h-60 bg-black md:bg-slate-500 lg:bg-sky-600 relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl" style="text-shadow: 0px 0px 6px #000000;">Nastar</span></div>
      </a>   
      <div class="h-44 md:h-52 lg:h-60 bg-sky-700 relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl" style="text-shadow: 0px 0px 6px #000000;">Mino</span></div>
      <div class="h-44 md:h-52 lg:h-60 bg-yellow-500 relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl">Kastangel</span></div>
      <div class="h-44 md:h-52 lg:h-60 bg-green-600 relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl">Sate</span></div>
      <div class="h-44 md:h-52 lg:h-60 bg-black relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl">Bapao </span></div>
    </div>
</div>

@endsection