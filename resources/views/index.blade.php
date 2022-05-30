@extends('user.components.main')

@section('content')
<div class="flex flex-col justify-center px-2 lg:px-1 ">
  @if ($videohomepage->count())
    <video class="w-full  lg:h-[38rem] object-fill" controls controlsList="nodownload" >
      <source src="{{asset('storage/'.$videohomepage[0]->video) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  @else
  <video class="w-full  lg:h-[38rem] object-fill" controls controlsList="nodownload" >
    <source src="" type="video/mp4">
      Your browser does not support the video tag.
  </video>
  @endif
    
    <div class="flex flex-col w-full items-center md:justify-evenly md:items-center md:flex-row lg:justify-evenly mt-2 lg:py-20">
      <img src="{{ asset('image/atensi-logo.png') }}" alt="logo" class="w-2/3 md:w-72 md:h-72 lg:w-96 lg:h-96">
      <div class="w-3/4 mt-4 md:mt-0 flex flex-col justify-evenly items-center md:w-1/3 md:justify-center md:py-9 uppercase text-center">
        <p class="text-xs font-semibold">Dapatkan Kelas Pembinaan Gratis</p>
        <h5 class="font-extralight text-xl md:text-4xl  lg:text-5xl my-2 lg:leading-[3.5rem]">Langsung dari<br>para expert di<br>bidangnya</h5>
        <a href="/login" class="px-4 py-2 w-full bg-[#4bd1a0] hover:bg-green-400 rounded-sm text-white md:py-4 md:text-lg lg:font-bold lg:tracking-widest"> 
          <span class="text-xs md:text-2xl">Gabung sekarang</span>
        </a>
        <p class="text-xs mt-2">Dengan bergabung sekarang anda akan mendapatkan benefit untuk online sharing session</p>
      </div>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 mt-2 gap-2 md:gap-0">
      @foreach ($classes as $class)
      <a href="/kelas/{{ $class->slug }}" class="aspect-[5/3] md:aspect-[7/3] relative group overflow-hidden hover:scale-95 transition-all duration-500 rounded-lg lg:rounded-none">
         <img src="{{ asset('storage/'.$class->image) }}" alt="{{ $class->name }}" class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500 object-cover">
         <span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl" style="text-shadow: 0px 0px 6px #000000;">
          <span class="capitalize">{{ $class->name }}</span> 
         </span>
      </a>  
      @endforeach
    </div>

    <div class="flex flex-col w-full md:flex-row md:gap-4">
      <div class="flex flex-col mt-4 md:w-1/2 gap-1" >   
        <h5 class="uppercase text-lg md:text-2xl text-center">Apa kata mereka?</h5>    
          <div id="carouselExampleCaptions" class="carousel slide relative carousel-dark" data-bs-ride="carousel">
            <div class="carousel-inner relative w-full overflow-hidden">
              @if ($testimonials->count())
                  <div class="carousel-item active relative float-left w-full text-center">
                    <p class="text-sm md:text-lg lg:text-xl italic mx-auto text-gray-700 max-w-4xl">
                      {{ $testimonials[0]->body }}
                    </p>
                    <div class="mt-12 mb-6 flex justify-center">
                      <img
                        src="{{ asset('storage/'.$testimonials[0]->image) }}"
                        class="rounded-full w-24 h-24 shadow-lg"
                        alt="smaple image"
                      />
                    </div>
                    <p class="text-gray-500">{{ $testimonials[0]->name }}</p>
                  </div>
              @else
                <p class="fs-4 text-center">Not found</p>
              @endif

              @foreach ($testimonials->skip(1) as $testimonial)
              <div class="carousel-item  relative float-left w-full text-center">
                <p class="text-sm md:text-lg lg:text-xl italic mx-auto text-gray-700 max-w-4xl">
                  {{ $testimonial->body }}
                </p>
                <div class="mt-12 mb-6 flex justify-center">
                  <img
                    src="{{ asset('storage/'.$testimonial->image) }}"
                    class="rounded-full w-24 h-24 shadow-lg"
                    alt="smaple image"
                  />
                </div>
                <p class="text-gray-500">{{ $testimonial->name }}</p>
              </div>
              @endforeach
         
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