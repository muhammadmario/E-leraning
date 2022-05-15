@if ($conversations->isNotEmpty())
<div wire:poll class="w-full flex border-x-2">
    <div class="w-1/3 bg-white h-[80vh] overflow-y-auto border-r-2 px-2">
        <div class="h-12 flex items-center border-b-2 justify-between">
            <h3 class="text-lg">Kontak</h3>
            <a href="/kontak" class="bg-black text-white px-2 py-2 rounded-md">Cari Kontak</a>
        </div>
        <div class="w-full flex flex-col gap-2 ">
            @foreach ($conversations as $conversation)
            <div class="w-full py-1 rounded-sm cursor-pointer {{ $conversation->id === $selectedConversation->id ? 'bg-sky-500 text-white' : 'bg-slate-50 text-black' }}">
                <a wire:click="viewMessage({{ $conversation->id }})" class="flex justify-between items-start">
                    @if ($conversation->sender_id === auth()->id())
                    <div>
                        <h6>{{ $conversation->receiver->name }}</h6>
                        <p class="text-sm ">{{ $conversation->messages->last()?->body }}</p>
                    </div>
                        <p class="text-xs ">{{ $conversation->messages->last()?->created_at->format('d M h:i a') }}</p>
                    @else
                    <div>
                        <h6>{{ $conversation->sender->name }}</h6>
                        <p class="text-sm">{{ $conversation->messages->last()?->body }}</p>
                    </div>
                        <p class="text-xs">{{ $conversation->messages->last()?->created_at->format('d M h:i a') }}</p>
                    @endif
                </a>
            </div>
            @endforeach
            
            {{-- <div class="w-full">
                <h6>Udil</h6>
                <p class="text-sm">halo om</p>
            </div> --}}
        </div>
    </div>
    <div class="w-2/3 bg-white h-[80vh] flex flex-col relative">
        <div class="h-14  flex items-center px-2 border-b-2">
            @if ($conversation->sender_id === auth()->id())
                <h3 class="text-lg">{{ $selectedConversation->receiver->name }}</h3>
            @else
                <h3 class="text-lg">{{ $selectedConversation->sender->name }}</h3>
            @endif
        </div>
        <div class="h-full w-full flex flex-col gap-2  px-3 py-2 overflow-y-auto">
            @foreach ($selectedConversation->messages as $message)
            <p class="text-xs text-center"> {{ $message->created_at->format('d M h:i a') }}</p>
            <div class="pesan bg-sky-500 w-fit px-3 py-2 rounded-md text-white {{ $message->user_id === auth()->id() ? "self-end" : "" }} ">
                <p class="text-sm ">{{ $message->body }}</p>
            </div>
            @endforeach
        </div>

        <form wire:submit.prevent="sendMessage" class="h-14 border-t-2  flex justify-evenly items-center px-2 absolute bottom-0 w-full">
            <input wire:model.defer="body" type="text" name="message" class="w-4/5 h-7 border-2">
            <button type="submit" class="w-1/5 px-2 h-7 bg-black text-white">Kirim</button>
        </form>
    </div>
</div>
    
@else
    <div class="w-full flex flex-col justify-center items-center h-[80vh]">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
          </svg>
        <h3>Tidak ada pesan</h3>
        <h4>Klik tombol dibawah untuk memulai chat dengan user</h4>
        <a href="/kontak" class="bg-black text-white px-3 py-2 rounded-md">Kontak</a>
    </div>
@endif
