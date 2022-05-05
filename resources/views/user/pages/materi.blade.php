@extends('user.components.main')

@section('content')
<div class="flex flex-col mx-3 lg:mx-0">
   <h1 class="text-2xl md:text-3xl font-light mt-2">Kategori : {{ $category->name }}</h1>
   @if ($lessons->count())
   @foreach ($lessons as $lesson)
   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-2 gap-1 md:gap-2">
         <a href="/kelas/{{ $classroom }}/{{ $lesson->category->slug }}/{{ $lesson->slug }}" class="aspect-[5/3]  relative h-15 group overflow-hidden hover:scale-95 transition-all duration-500 rounded-lg">
            <img src="{{ asset('storage/'.$lesson->image) }}" alt="{{ $lesson->name}}" class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500">
            <span class="absolute bottom-3 left-3 md:bottom-5 md:left-5 text-white md:text-2xl lg:text-4xl" style="text-shadow: 0px 0px 6px #000000;">
            {{ $lesson->name }}
         </span>
         </a>  
   </div>
         @endforeach  
      @else
         <h2 class="text-center">Materi tidak ditemukan..</h2>
      @endif
</div>

@endsection