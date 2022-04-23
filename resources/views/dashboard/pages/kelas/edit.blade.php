@extends('dashboard.components.main')

@section('content')
<div class="flex-1 px-2 md:px-3 mt-14 md:mt-0 bg-indigo-50 min-h-screen pt-2">
    @include('dashboard.components.navbar')
    
    <div class="w-full flex">
        <a href="/dashboard/kelas" class="text-sm md:text-base py-2 px-2 md:py-2 md:px-3 bg-green-500 text-white rounded-md shadow-sm mb-2 flex gap-1 justify-center items-center hover:bg-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
              </svg>
            Kembali
        </a>
    </div>
    
    @if(session()->has('success'))
    <div class="alert bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-green-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form id="fileUploadForm" method="POST" action="/dashboard/kelas/{{ $classroom->slug }}" enctype="multipart/form-data" class="md:w-2/3 w-full">
        @method('put')
        @csrf
        {{-- nama kelas --}}
        <label for="name" class="tracking-wide text-sm font-medium">Nama Kelas</label>
        <input id="name" type="text" name="name" class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-sm mb-2" value="{{ old('name', $classroom->name)}}" required>
        @error('name')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror

        {{-- slug --}}
        <label for="slug" class="tracking-wide text-sm font-medium">Slug</label>
        <input id="slug" type="text" name="slug" readonly  class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-sm mb-2" value="{{ old('slug', $classroom->slug) }}" required>
        @error('slug')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror

        {{-- gambar --}}
        <label for="image" class="tracking-wide text-sm font-medium">Gambar</label>
        @if ($classroom->image)
            <img src="{{ asset('storage/'.$classroom->image) }}" class="h-16 w-16 img-preview block mb-3">
        @else
            <img class="h-16 w-16 img-preview block mb-3">
        @endif
        <label class="w-fit flex gap-1 items-center justify-center py-1 px-2 md:px-4 md:py-2 bg-white rounded-sm shadow-sm tracking-wide border-2 cursor-pointer hover:bg-sky-400 hover:text-white mb-2">
            <svg class="w-7 h-7 md:w-8 md:h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" /></svg>
            <span class="text-sm md:text-base leading-normal">Select a file</span>
            <input type='file' class="hidden" id="image" name="image" onchange="previewImg()"/>   
        </label>
        <div id="file-upload-filename" class="mb-2 font-light text-sm"></div>
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror

        <div class="flex justify-end mt-2">
            <button type="submit" class="text-sm md:text-base py-2 px-2 md:py-2 md:px-3 bg-sky-500 text-white rounded-md shadow-sm mb-2 flex gap-1 justify-center items-center hover:bg-sky-600">Ubah</button>
        </div>
    </form>    
</div>  
@endsection