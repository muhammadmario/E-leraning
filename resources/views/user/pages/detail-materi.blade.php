@extends('user.components.main')

@section('content')
<div class="flex flex-col">
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