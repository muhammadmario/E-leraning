@extends('user.components.main')

@section('content')
<div class="flex flex-col justify-center px-2 lg:px-1 ">
    <video class="w-full" controls>
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
      Your browser does not support the video tag.
    </video>
    <div class="flex flex-col w-full items-center md:justify-evenly md:items-center md:flex-row lg:justify-evenly mt-2 lg:py-20">
      <img src="{{ asset('image/atensi-logo.png') }}" alt="logo" class="w-2/3 md:w-72 md:h-72 lg:w-96 lg:h-96">
      <div class="w-2/3 h-44 flex flex-col justify-evenly items-center md:w-1/3 md:h-96 md:justify-center md:py-9">
        <h5 class="uppercase text-center font-extralight  text-xl md:text-2xl lg:text-4xl">Langsung dari<br>para expert<br>di bidangnya</h5>
        {{-- <p class="font-extralight uppercase text-center text-lg md:leading-[4rem] md:text-4xl lg:leading-[4rem] lg:text-xl lg:tracking-wide md:px-11">Langsung dari <br> para expert di <br> bidangnya</p> --}}
        <a href="#" class="uppercase px-4 py-2 w-full md:mt-6 bg-green-400 hover:bg-green-500 rounded-sm text-white text-center md:py-4 md:text-lg lg:font-bold lg:tracking-widest ">Gabung sekarang</a>
      </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 mt-2 gap-2">
      @foreach ($classes as $class)
      <a href="/kelas/{{ $class->id }}" class="aspect-[4/3] md:aspect-[5/3] relative h-15 group overflow-hidden hover:scale-95 transition-all duration-500 rounded-lg">
         <img src="{{ asset('storage/'.$class->image) }}" alt="{{ $class->name }}" class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500">
         <span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl" style="text-shadow: 0px 0px 6px #000000;">
         {{ $class->name }}
        </span>
      </a>  
      @endforeach
      {{-- <div class="h-44 md:h-52 lg:h-60 bg-black md:bg-slate-500 lg:bg-sky-600 relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl" style="text-shadow: 0px 0px 6px #000000;">Makanan</span></div>
      <div class="h-44 md:h-52 lg:h-60 bg-sky-700 relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl" style="text-shadow: 0px 0px 6px #000000;">Minuman</span></div>
      <div class="h-44 md:h-52 lg:h-60 bg-yellow-500 relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl">Mengemudi</span></div>
      <div class="h-44 md:h-52 lg:h-60 bg-green-600 relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl">Komputer</span></div>
      <div class="h-44 md:h-52 lg:h-60 bg-black relative"><span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl">Bahasa Inggris  </span></div> --}}
    </div>
    <div class="flex flex-col w-full md:flex-row md:gap-4">
      <div class="flex flex-col mt-4 md:w-1/2 gap-1" >   
        <h5 class="uppercase text-lg md:text-2xl text-center">Apa kata mereka?</h5>    
          <div id="carouselExampleCaptions" class="carousel slide relative carousel-dark" data-bs-ride="carousel">
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full text-center ">
                <p class="text-sm md:text-lg lg:text-xl italic mx-auto text-gray-700 max-w-4xl">
                  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                  numquam iure provident voluptate esse quasi, voluptas nostrum quisquam!"
                </p>
                <div class="mt-12 mb-6 flex justify-center">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                    class="rounded-full w-24 h-24 shadow-lg"
                    alt="smaple image"
                  />
                </div>
                <p class="text-gray-500">- Anna Morian</p>
              </div>
              <div class="carousel-item relative float-left w-full text-center">
                <p class="text-sm md:text-lg lg:text-xl italic mx-auto text-gray-700 max-w-4xl">
                  "Neque cupiditate assumenda in maiores repudiandae mollitia adipisci maiores
                  repudiandae mollitia consectetur adipisicing architecto elit sed adipiscing
                  elit."
                </p>
                <div class="mt-12 mb-6 flex justify-center">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp"
                    class="rounded-full w-24 h-24 shadow-lg"
                    alt="smaple image"
                  />
                </div>
                <p class="text-gray-500">- Teresa May</p>
              </div>
              <div class="carousel-item relative float-left w-full text-center">
                <p class="text-sm md:text-lg lg:text-xl italic mx-auto text-gray-700 max-w-4xl">
                  "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore eu fugiat nulla pariatur est laborum neque cupiditate assumenda in
                  maiores."
                </p>
                <div class="mt-12 mb-6 flex justify-center">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                    class="rounded-full w-24 h-24 shadow-lg"
                    alt="smaple image"
                  />
                </div>
                <p class="text-gray-500">- Kate Allise</p>
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
      <div class="flex flex-col mt-4 md:w-1/2 gap-1">
        <h5 class="uppercase text-lg md:text-2xl text-center">Berita</h5>    
        <div class="w-full bg-sky-600 px-8 py-4 text-white">
          <h1 class="text-lg md:text-2xl">Balai Napza "Baturraden" Perkuat ATENSI Napza di Lingkungan Sekolah</h1>
          <p class="text-xs md:text-sm font-extralight">Kementerian Sosial RI melalui Balai Rehabilitasi Sosial Korban Penyalahgunaan (BRSKP) Napza "Satria" Di Baturraden.....</p>
          <a href="#" class="text-xs md:text-sm underline hover:text-sky-700">Selengkapnya</a>
        </div>
        <div class="w-full bg-sky-600 px-8 py-4 text-white">
          <h1 class="text-lg md:text-2xl">Balai Napza "Baturraden" Perkuat ATENSI Napza di Lingkungan Sekolah</h1>
          <p class="text-xs md:text-sm font-extralight">Kementerian Sosial RI melalui Balai Rehabilitasi Sosial Korban Penyalahgunaan (BRSKP) Napza "Satria" Di Baturraden.....</p>
          <a href="#" class="text-xs md:text-sm underline hover:text-sky-700">Selengkapnya</a>
        </div>
        <div class="w-full bg-sky-600 px-8 py-4 text-white">
          <h1 class="text-lg md:text-2xl">Balai Napza "Baturraden" Perkuat ATENSI Napza di Lingkungan Sekolah</h1>
          <p class="text-xs md:text-sm font-extralight">Kementerian Sosial RI melalui Balai Rehabilitasi Sosial Korban Penyalahgunaan (BRSKP) Napza "Satria" Di Baturraden.....</p>
          <a href="#" class="text-xs md:text-sm underline hover:text-sky-700">Selengkapnya</a>
        </div>
      </div>
    </div>
</div>

@endsection