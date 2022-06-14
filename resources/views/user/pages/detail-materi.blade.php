@extends('user.components.main')

@section('content')
<div class="flex flex-col">

   <div class="flex justify-evenly w-full flex-col md:flex-row">
      <div class="w-full md:w-2/3 ">
         <video class="w-full mt-2" controls controlsList="nodownload">
            <source src="{{asset('storage/'.$lesson->video) }}" type="video/mp4">
            {{-- <source src="movie.ogg" type="video/ogg"> --}}
            Your browser does not support the video tag.
         </video>

         <h1 class="text-2xl md:text-3xl mt-2 mx-2 md:mx-0">{{ $lesson->name}}</h1>
         <h1 class="text-sm mx-2 md:mx-0">Oleh : 
         @if ($lesson->user_id == !null)   
             {{ $lesson->user->name}}
         @else
             Not found
         @endif  , {{ $lesson->updated_at->diffForHumans() }}</h1>

         <div class="body-lesson text-sm md:text-base mx-2 md:mx-0">        
            {!! $lesson->body !!}
         </div>
         <br>
         <div class="w-full border-2"></div>
         <div class="w-full mt-3">
            @auth
            <h2 class="text-lg mb-2">{{ $comments->count() }} Komentar</h2>
            <form action="/comment" method="POST" class="flex flex-col">
               @csrf
               <label for="user_id" class=" hidden justify-center items-center bg-slate-200"><span class="mx-2">user id</span></label>
               <input type="text" value="{{ auth()->user()->id }}" class="hidden form-control relative flex-auto min-w-0  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black focus:outline-none" placeholder="Tambah komentar"  name="user_id">

               <label for="lesson_id" class=" hidden justify-center items-center bg-slate-200"><span class="mx-2">lesson id</span></label>
               <input type="text" value="{{ $lesson->id }}" class="hidden form-control relative flex-auto min-w-0  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black focus:outline-none" placeholder="Tambah komentar"  name="lesson_id">

               <label for="parent_id" class=" hidden justify-center items-center bg-slate-200"><span class="mx-2">parent id</span></label>
               <input type="text" value="0" class="hidden form-control relative flex-auto min-w-0  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black focus:outline-none" placeholder="Tambah komentar"  name="parent_id">

               <div class="flex">
                  <label for="body" class="justify-center items-center bg-slate-200 hidden md:flex"><span class="mx-2">{{ auth()->user()->username }}</span></label>
                  <input type="text" value="" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black focus:outline-none" placeholder="Tambah komentar"  name="body">
               </div>
               
               <div class="flex justify-end mt-2">
                  <button type="submit" class="block bg-black text-white px-3 py-2 rounded-sm">Komentar</button>
               </div>
            </form>
            @endauth

            @guest
             <h1>login dlu</h1>   
            @endguest

            <div class="flex flex-col gap-2 max-h-72 overflow-y-auto">
               @foreach ($comments->where('parent_id','0') as $comment)
               <div class="flex gap-2">
                  <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="avatar" class="h-12 w-12">
                  <div class="flex flex-col">
                     <div class="flex items-center gap-2">
                        <h3 class="font-semibold">{{ $comment->user->username }}</h3>
                        <p class="text-xs text-slate-400">{{ $comment->updated_at->diffForHumans() }}</p>
                        @if (auth()->user()->id==$comment->user->id)
                           <form action="/comment/{{ $comment->id }}" method="POST">
                              @method('delete')
                              @csrf
                              <button onclick="return confirm('Apakah kamu yakin?')">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400 hover:text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                 </svg>
                              </button> 
                           </form>   
                        @endif
                     </div>
                     <p class="text-sm">
                        {{ $comment->body }}
                     </p>
                    
                     <br>
                     @foreach ($replies as $reply)
                        @if($reply->parent_id == $comment->id)
                        <div class="flex gap-4 mb-2">
                           <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="avatar" class="h-12 w-12">
                           <div class="flex flex-col justify-center">
                              <div class="flex items-center gap-2">
                                 <h3 class="font-semibold">{{$reply->user->username }}</h3>
                                 <p class="text-xs text-slate-400">{{$reply->updated_at->diffForHumans() }}</p>
                                 @if (auth()->user()->id == $reply->user_id)
                                    <form action="/comment/{{$reply->id }}" method="POST">
                                       @method('delete')
                                       @csrf
                                       <button onclick="return confirm('Apakah kamu yakin?')">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-400 hover:text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                             <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                          </svg>
                                       </button> 
                                    </form>   
                                 @endif
                              </div>
                              <p class="text-sm">
                                 {{ $reply->body }}
                              </p>
                           </div>
                        </div>
                        @endif
                     @endforeach
                     
                     <div class="text-sm self-end cursor-pointer balas">Balas</div>
                     <form action="/comment" method="POST" class="flex flex-col form-balas">
                        @csrf
                        <label for="user_id" class=" hidden justify-center items-center bg-slate-200"><span class="mx-2">user id</span></label>
                        <input type="text" value="{{ auth()->user()->id }}" class="hidden form-control relative flex-auto min-w-0  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black focus:outline-none" placeholder="Tambah komentar"  name="user_id">
         
                        <label for="lesson_id" class=" hidden justify-center items-center bg-slate-200"><span class="mx-2">lesson id</span></label>
                        <input type="text" value="{{ $lesson->id }}" class="hidden form-control relative flex-auto min-w-0  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black focus:outline-none" placeholder="Tambah komentar"  name="lesson_id">
         
                        <label for="parent_id" class=" hidden justify-center items-center bg-slate-200"><span class="mx-2">parent id</span></label>
                        <input type="text" value="{{ $comment->id }}" class="hidden form-control relative flex-auto min-w-0  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black focus:outline-none" placeholder="Tambah komentar"  name="parent_id">
         
                        <div class="flex">
                           <label for="body" class="justify-center items-center bg-slate-200 hidden md:flex"><span class="mx-2">{{ auth()->user()->username }}</span></label>
                           <input type="text" value="" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-black focus:outline-none" placeholder="Tambah komentar"  name="body">
                        </div>
                        
                        <div class="flex justify-end mt-2">
                           <button type="submit" class="block bg-black text-white px-3 py-2 rounded-sm">Komentar</button>
                        </div>
                     </form>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   
      <div class="md:w-1/3 mt-2 hidden md:block">
         <div class="flex flex-col px-4 gap-2">
            <h1>Kategori lainnya : </h1>
            @foreach ($categories as $category)
            <a href="/kelas/{{ $category->classroom->slug }}/{{ $category->slug }}" class="aspect-[5/3] relative h-56  group overflow-hidden hover:scale-95 transition-all duration-500 rounded-lg">
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