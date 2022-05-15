<div class="w-1/2 m-auto">    
    <div class="overflow-auto rounded-lg shadow">
        <table class="table-auto w-full">
            <thead class="border-b-2 border-gray-200 bg-white">
              <tr>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black">Nama Kontak</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black">Aksi</th>
              </tr>
            </thead>
            <tbody> 
            @foreach ($users as $user)
              <tr class="border-b-2 border-white">
                <td class="p-3 text-sm text-gray-700">
                    {{ $user->name }}
                </td> 
                <td class="p-3 text-sm text-gray-700 flex gap-2">
                    <a href="#" wire:click.prevent="startConversation({{ $user->id }})" class="flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-black " viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                        </svg>
                         Kirim pesan
                    </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <div class="w-full flex justify-end mt-2">
      {{ $users->links() }}
  </div>
</div>
