<div wire:poll class="w-full flex">
    <div class="w-1/3 bg-blue-300 h-[80vh] overflow-y-auto">
        <div class="h-12 bg-slate-600 flex  items-center px-2">
            <h3 class="text-lg">Kontak</h3>
        </div>
        <div class="w-full flex flex-col gap-2 px-2">
            @foreach ($conversations as $conversation)
            <div class="w-full {{ $conversation->id === $selectedConversation->id ? 'bg-green-300' : 'bg-slate-50' }}">
                <a wire:click="viewMessage({{ $conversation->id }})" >
                    @if ($conversation->sender_id === auth()->id())
                        <h6>{{ $conversation->receiver->name }}</h6>
                        <p class="text-sm">halo om</p>
                    @else
                        <h6>{{ $conversation->sender->name }}</h6>
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
    <div class="w-2/3 bg-green-500 h-[80vh] flex flex-col relative">
        <div class="h-12 bg-yellow-600 flex items-center px-2">
            @if ($conversation->sender_id === auth()->id())
                <h3 class="text-lg">{{ $selectedConversation->receiver->name }}</h3>
            @else
                <h3 class="text-lg">{{ $selectedConversation->sender->name }}</h3>
            @endif
        </div>
        <div class="h-full w-full flex flex-col gap-2 bg-black px-3">
            @foreach ($selectedConversation->messages as $message)
            <div class="pesan bg-white w-fit px-2 py-2 rounded-sm {{ $message->user_id === auth()->id() ? "self-end" : "" }} ">
                <p class="text-sm"> {{ $message->user->name }}</p>
                <p class="text-xs">{{ $message->body }}</p>
            </div>
            @endforeach
        </div>

        <form wire:submit.prevent="sendMessage" class="h-12 bg-yellow-600 flex justify-evenly items-center px-2 absolute bottom-0 w-full">
            <input wire:model.defer="body" type="text" name="message" class="w-4/5 h-7">
            <button type="submit" class="w-1/5 px-2 h-7 bg-black text-white">Kirim</button>
        </form>
    </div>
</div>