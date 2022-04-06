@extends('dashboard.components.main')

@section('content')
<div class="flex-1 px-2 md:px-3 mt-14  md:mt-0 bg-indigo-50 h-screen pt-2 overflow-y-scroll">
    @include('dashboard.components.navbar')

    <h1 class="text-2xl md:text-3xl font-light my-2">{{ $lesson->name }}</h1>
    <video class="w-full" controls>
         <source src="{{asset('storage/'.$lesson->video) }}" type="video/mp4">
         <source src="movie.ogg" type="video/ogg">
         Your browser does not support the video tag.
     </video>
     <h1 class="text-2xl md:text-3xl text-center mt-2">{{ $lesson->name}}</h1>
     <div class="body-lesson"> 
        {!! $lesson->body !!}
     </div>
</div>  
@endsection