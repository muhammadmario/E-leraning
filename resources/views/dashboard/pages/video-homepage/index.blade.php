@extends('dashboard.components.main')

@section('content')
<div class="flex-1 px-2 md:px-3 mt-14  md:mt-0 bg-indigo-50 min-h-screen pt-2">
    @include('dashboard.components.navbar')

    @if(session()->has('success'))
    <div class="alert bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-green-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    @if ($videohomepages->count())
        <div class="alert bg-yellow-100 rounded-lg py-5 px-6 mb-3 text-base text-yellow-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
            Homepage Video hanya bisa menampung 1 video, bila anda ingin mengganti video maka anda harus menghapus video lama
        </div>
    @else
        <div class="w-full flex justify-end">
            <a href="/dashboard/video-homepage/create" class="py-2 px-3 bg-green-500 text-white rounded-md shadow-sm mb-2 flex gap-1 justify-center items-center hover:bg-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Tambah video
            </a>
        </div>  
    @endif
  
    
    <div class="overflow-auto rounded-lg shadow">
        <table class="table-auto w-full">
            <thead class="border-b-2 border-gray-200 bg-white">
              <tr>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black ">Video</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black">Aksi</th>
              </tr>
            </thead>
            <tbody> 
                @foreach ($videohomepages as $videohomepage)
                <tr class="{{ $loop->index % 2 == 1 ? "bg-white" : "" }}">
                    <td class="p-3 ">
                        <video src="{{ asset('storage/'.$videohomepage->video) }}" alt="{{ $videohomepage->video }}" class="h-24 ">
                    </td>
                    <td class="p-3 text-sm text-gray-700">
                        <div class="flex flex-row gap-2">
                            <form action="/dashboard/video-homepage/{{ $videohomepage->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button onclick="return confirm('Apakah kamu yakin?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-400 hover:text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                       
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>  
@endsection