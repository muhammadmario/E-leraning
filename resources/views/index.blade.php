@extends('user.components.main')

@section('content')
<div class="flex flex-col justify-center px-2 lg:px-1 ">
    <video class="w-full" controls>
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
      Your browser does not support the video tag.
    </video>
    <div class="flex flex-col w-full justify-center items-center md:justify-evenly md:items-center md:flex-row mt-2 lg:py-20">
      <img src="{{ asset('image/atensi-logo.png') }}" alt="logo" class="w-2/3 md:w-72 md:h-72 lg:w-96 lg:h-96">
      <div class="w-2/3 h-44 flex flex-col justify-evenly items-center shadow-sm md:w-max md:h-96 md:justify-center md:py-9">
        <p class="font-extralight uppercase text-center text-lg md:leading-[4rem] md:text-4xl lg:leading-[4rem] lg:text-4xl lg:tracking-wide md:px-11">Langsung dari <br> para expert di <br> bidangnya</p>
        <a href="#" class="uppercase px-4 py-2 w-full bg-green-400 hover:bg-green-500 rounded-sm text-white text-center md:py-4 md:text-lg lg:font-bold lg:tracking-widest">Gabung sekarang</a>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 mt-2">
      <div class="h-44 md:h-52 lg:h-60 bg-black relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl" style="text-shadow: 0px 0px 6px #000000;">Makanan</span></div>
      <div class="h-44 md:h-52 lg:h-60 bg-sky-700 relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl" style="text-shadow: 0px 0px 6px #000000;">Minuman</span></div>
      <div class="h-44 md:h-52 lg:h-60 bg-yellow-500 relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl">Mengemudi</span></div>
      <div class="h-44 md:h-52 lg:h-60 bg-green-600 relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl">Komputer</span></div>
      <div class="h-44 md:h-52 lg:h-60 bg-black relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl">Bahasa Inggris  </span></div>
    </div>
    <div class="flex flex-col mt-4 md:w-1/2 gap-4" >   
      <h5 class="uppercase text-lg md:text-2xl text-center">Apa kata mereka?</h5>
        <div class="flex w-full gap-2 p-2 items-center shadow-md md:px-6 md:gap-4">
          <img src="{{ asset('image/img_avatar.png') }}" alt="avatar" class="rounded-full h-20 w-20" >
          <div>
            <h6 class="text-base font-medium">Deddy Corbuzier</h6>
            <p class="font-extralight text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, libero!</p>
          </div>
        </div>

        <div class="flex w-full gap-2 p-2 items-center shadow-md md:px-6 md:gap-4">
          <img src="{{ asset('image/img_avatar.png') }}" alt="avatar" class="rounded-full h-20 w-20" >
          <div>
            <h6 class="text-base font-medium">Deddy Corbuzier</h6>
            <p class="font-extralight text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, libero!</p>
          </div>
        </div>
       
    </div>
</div>

@endsection