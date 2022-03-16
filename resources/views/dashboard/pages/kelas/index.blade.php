@extends('dashboard.components.main')

@section('content')
<div class="flex-1 px-2 md:px-3 mt-14  md:mt-0 bg-indigo-50 min-h-screen pt-2">
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
    <div class="w-full flex justify-end">
        <a href="/kelas/create" class="py-2 px-3 bg-green-500 text-white rounded-md shadow-sm mb-2 flex gap-1 justify-center items-center hover:bg-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Tambah Kelas
        </a>
    </div>
    
    <div class="overflow-auto rounded-lg shadow">
        <table class="table-auto w-full">
            <thead class="border-b-2 border-gray-200 bg-white">
              <tr>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black ">Gambar</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black">Judul</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black">Deskripsi</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black">Video</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left text-black">Aksi</th>
              </tr>
            </thead>
            <tbody> 
              <tr>
                <td class="p-3 text-sm text-gray-700">
                    <img src="{{ asset('image/makanan.jpg') }}" alt="makanan">
                </td>
                <td class="p-3 text-sm text-gray-700">Makanan</td>
                <td class="p-3 text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quasi iste odit, nisi quod consequatur sequi exercitationem atque non id.</td>
                <td class="p-3 text-sm text-gray-700">
                    <img src="{{ asset('image/makanan.jpg') }}" alt="makanan">
                </td>
                <td class="p-3 text-sm text-gray-700 flex gap-2 justify-center items-center  align-self-center">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-sky-400 hover:text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="/kelas/edit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400 hover:text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                          </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-400 hover:text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </td>
              </tr>
              <tr class="bg-white">
                <td class="p-3 text-sm text-gray-700">
                    <img src="{{ asset('image/makanan.jpg') }}" alt="makanan">
                </td>
                <td class="p-3 text-sm text-gray-700">Earth, Wind, and Fire</td>
                <td class="p-3 text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quasi iste odit, nisi quod consequatur sequi exercitationem atque non id.</td>
                <td class="p-3 text-sm text-gray-700">
                    <img src="{{ asset('image/makanan.jpg') }}" alt="makanan">
                </td>
                <td class="p-3 text-sm text-gray-700 flex gap-2">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-sky-500" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                          </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
</div>  
@endsection