@extends('dashboard.components.main')

@section('content')
<div class="flex-1 px-2 md:px-3 mt-14 md:mt-0 bg-indigo-50 min-h-screen pt-2">
    <div class="flex w-full justify-between border-white border-b-2 items-center pb-2 mb-2">
        <h1 class="text-xl font-normal md:text-2xl">Kelas</h1>
        <div class="box shadow-sm h-14 py-2 px-3 bg-white md:flex md:gap-1 justify-evenly items-center rounded-md hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-slate-800" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
            </svg>
            <div>
                <h1 class="font-semibold text-sm text-slate-600">Coki Pardede</h1>
                <h1 class="text-slate-500 text-sm">Guru</h1>  
            </div>
            <div class="p-2">
                <div class="dropdown inline-block relative group">
                  <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                  </button>
                  <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 group-hover:block">
                    <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Logout</a></li>
                  </ul>
                </div>  
            </div>
        </div>
    </div>
    <div class="w-full flex">
        <a href="/admin/kelas" class="text-sm md:text-base py-2 px-2 md:py-2 md:px-3 bg-green-500 text-white rounded-md shadow-sm mb-2 flex gap-1 justify-center items-center hover:bg-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
              </svg>
            Kembali
        </a>
    </div>
    
    <form id="fileUploadForm" method="post" action="#" enctype="multipart/form-data" class="md:w-2/3 w-full">
        <label for="title"  class="tracking-wide text-sm font-medium">Judul</label>
        <input id="title" type="text" name="title" value="" class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-sm mb-2">

        <label for="gambar" class="tracking-wide text-sm font-medium">Gambar</label>
        <label class="w-fit flex gap-1 items-center justify-center py-1 px-2 md:px-4 md:py-2 bg-white rounded-sm shadow-sm tracking-wide border-2 cursor-pointer hover:bg-sky-400 hover:text-white mb-2">
            <svg class="w-7 h-7 md:w-8 md:h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" /></svg>
            <span class="text-sm md:text-base leading-normal">Select a file</span>
            <input type='file' class="hidden" id="file-upload"/>   
        </label>
        <div id="file-upload-filename" class="mb-2 font-light text-sm"></div>

        <label for="gambar" class="tracking-wide text-sm font-medium">Video</label>
        <label class="w-fit flex gap-1 items-center justify-center py-1 px-2 md:px-4 md:py-2 bg-white rounded-sm shadow-sm tracking-wide border-2 cursor-pointer hover:bg-sky-400 hover:text-white mb-2">
            <svg class="w-7 h-7 md:w-8 md:h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" /></svg>
            <span class="text-sm md:text-base leading-normal">Select a file</span>
            <input type='file' class="hidden" id="file-upload"/>   
        </label>
        <div id="file-upload-filename" class="mb-2 font-light text-sm"></div>

        <label for="body" class="tracking-wide text-sm font-medium">Deskripsi</label>
        <input id="body" type="hidden" name="body" value="">
        <trix-editor input="body" class="bg-white"></trix-editor>  

        <div class="flex justify-end mt-2">
            <button type="submit" class="text-sm md:text-base py-2 px-2 md:py-2 md:px-3 bg-sky-500 text-white rounded-md shadow-sm mb-2 flex gap-1 justify-center items-center hover:bg-sky-600">Ubah</button>
        </div>
    </form>
    
</div>  
@endsection