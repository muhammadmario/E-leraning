@extends('user.components.main')

@section('content')
<div class="flex flex-col">
   {{-- <h1 class="text-2xl md:text-3xl font-light my-2">{{ $lesson->name }}</h1> --}}
   
   {{-- <iframe width="420" height="315" src="{{asset('storage/'.$lesson->video) }}"> </iframe> --}}
   <div class="flex justify-evenly w-full flex-col md:flex-row">
      <div class="w-full md:w-2/3">
         <video class="w-full mt-2" controls>
            <source src="{{asset('storage/'.$lesson->video) }}" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
         <h1 class="text-2xl md:text-3xl  mt-2">{{ $lesson->name}}</h1>
         <div class="body-lesson text-sm md:text-base ">        
            {!! $lesson->body !!}
         </div>
      </div>
   
      <div class="md:w-1/3 mt-2 hidden md:block">
         <div class="flex flex-col px-4 gap-2">
            <h1 class="">Video lainnya : </h1>
            @foreach ($categories as $category)
            <a href="/kelas/{{ $category->slug }}" class="aspect-[5/3] relative h-56  group overflow-hidden hover:scale-95 transition-all duration-500 rounded-lg">
               <img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }}" class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500">
               <span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white " style="text-shadow: 0px 0px 6px #000000;">
               {{ $category->name }}
              </span>
            </a>  
            @endforeach  
          </div>
      </div>
   </div>
  
   
</div>

@endsection