@extends('user.components.main')

@section('content')
<div class="flex flex-col">
  <h1 class="text-2xl md:text-3xl font-light">Gallery</h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-2 gap-1 md:gap-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <div>
      <img  src="http://atensinapza.com/gallery-img/1633538390.WhatsApp%20Image%202021-09-27%20at%2009.26.37.jpeg" alt="" class="img-gallery cursor-pointer aspect-[5/3] relative h-15 group overflow-hidden hover:scale-95 transition-all duration-500 rounded-lg">
      <h1 class="font-semibold">Penyerahan bantuan oleh menteri</h1>
      <p class="text-sm">penyerahan bantuan oleh menteri sosial untuk wira usaha kepada eks residen IPWL PINTU HIJRAH, banda aceh- aceh</p>
    </div>
    
    <div>
      <img  src="http://atensinapza.com/gallery-img/1633538109.WhatsApp%20Image%202021-09-27%20at%2009.04.33.jpeg" alt="" class="img-gallery aspect-[5/3] relative h-15 group overflow-hidden cursor-pointer hover:scale-95 transition-all duration-500 rounded-lg">
      <h1 class="font-semibold">Kegiatan keagamaan pada IPWL BUKIT DOA</h1>
      <p class="text-sm">kegiatan keagamaan pada IPWL BUKIT DOA, kab. deli serdang - sumatera utara.</p>
    </div>
    
    <div>
      <img  src="http://atensinapza.com/gallery-img/1633538390.WhatsApp%20Image%202021-09-27%20at%2009.26.37.jpeg" alt="" class="img-gallery cursor-pointer aspect-[5/3] relative h-15 group overflow-hidden hover:scale-95 transition-all duration-500 rounded-lg">
      <h1 class="font-semibold">Penyerahan bantuan oleh menteri</h1>
      <p class="text-sm">penyerahan bantuan oleh menteri sosial untuk wira usaha kepada eks residen IPWL PINTU HIJRAH, banda aceh- aceh</p>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
      <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
          <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Preview</h5>
          <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body relative p-4">
          <img src="" alt="" class="modal-img rounded-md">
        </div>
      </div>
    </div>
  </div>

</div>


@endsection