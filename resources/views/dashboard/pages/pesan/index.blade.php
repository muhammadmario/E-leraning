@extends('dashboard.components.main')

@section('content')
<div class="flex-1 px-2 md:px-3 mt-14  md:mt-0 bg-indigo-50 min-h-screen pt-2">
    @include('dashboard.components.navbar')
    <div class="w-full flex">
        <div class="w-1/3 bg-blue-300 h-[80vh] overflow-y-auto">
            <div class="h-12 bg-slate-600 flex  items-center px-2">
                <h3 class="text-lg">Kontak</h3>
            </div>
            <div class="w-full flex flex-col gap-2 px-2">
                <div class="w-full">
                    <h6>Udil</h6>
                    <p class="text-sm">halo om</p>
                </div>
                <div class="w-full">
                    <h6>Udil</h6>
                    <p class="text-sm">halo om</p>
                </div>
            </div>
        </div>
        <div class="w-2/3 bg-green-500 h-[80vh] flex flex-col relative">
            <div class="h-12 bg-yellow-600 flex items-center px-2">
                <h3 class="text-lg">Udil</h3>
            </div>
            <div class="h-12 bg-yellow-600 flex justify-evenly items-center px-2 absolute bottom-0 w-full">
                <input type="text" class="w-4/5 h-7">
                <button type="submit" class="w-1/5 px-2 h-7 bg-black text-white">Kirim</button>
            </div>
        </div>
    </div>
</div>  
@endsection