@extends('dashboard.components.main')

@section('content')
<div class="flex-1 px-2 md:px-3 mt-14  md:mt-0 bg-indigo-50 min-h-screen pt-2">
    @include('dashboard.components.navbar')

    @if(session()->has('success'))
    <div class="alert bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-green-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
      </button>
    </div>
    @endif
    
    <div class="overflow-auto rounded-lg shadow">
        <table class="table-auto w-full">
            <thead class="border-b-2 border-gray-200 bg-white">
              <tr>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black ">Komentar</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black">Oleh</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black">Materi</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black">Aksi</th>
              </tr>
            </thead>
            <tbody> 
                @foreach ($comments as $comment)
                <tr class="{{ $loop->index % 2 == 1 ? "bg-white" : "" }}">
                    <td class="p-3 text-sm text-gray-700">{{ $comment->body }}</td>
                    <td class="p-3 text-sm text-gray-700">{{ $comment->user->username }}</td>
                    <td class="p-3 text-sm text-gray-700">{{ $comment->lesson->name }}</td>
                    <td>
                        <a href="/kelas/{{ $comment->lesson->category->classroom->slug }}/{{ $comment->lesson->category->slug }}/{{ $comment->lesson->slug }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.707 3.293a1 1 0 010 1.414L5.414 7H11a7 7 0 017 7v2a1 1 0 11-2 0v-2a5 5 0 00-5-5H5.414l2.293 2.293a1 1 0 11-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>    
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    <div class="w-full flex justify-end mt-2">
        {{-- {{ $comments->links() }} --}}
    </div>
</div>  
@endsection