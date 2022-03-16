@extends('user.components.main')

@section('content')
<div class="flex justify-center px-2 lg:px-1 lg:h-128">
    <video class="w-full" controls>
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
      Your browser does not support the video tag.
    </video>
</div>

@endsection