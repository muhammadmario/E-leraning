@extends('dashboard.components.main')

@section('content')
<div class="flex-1 px-2 md:px-3 mt-14 md:mt-0 bg-indigo-50 max-h-screen pt-2 overflow-y-auto">
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
    <div class="flex flex-col">
        <h1 class="text-2xl md:text-3xl font-light my-2">Makanan - Nastar</h1>
        <video class="w-full" controls>
             <source src="movie.mp4" type="video/mp4">
             <source src="movie.ogg" type="video/ogg">
             Your browser does not support the video tag.
         </video>
         <h1 class="text-2xl md:text-3xl text-center mt-2">Pembuatan Nastar</h1>
         <p class="px-2 text-sm md:text-base"> 
             Bahan-bahan:<br>
             - 200 gr butter Wisjman<br>
             - 50 gr gula halus20 gr susu full cream bubuk<br>
             - 20 gr tepung maizena<br>
             - 250 gr tepung terigu Kunci Biru premium  <br>
             - 2 butir kuning telur <br>
             <br>
             Bahan isian:<br>
             - 4 buah nanas kupas yang telah diparut<br>
             - 1 batang kayu manis <br>
             - 100 gr gula pasir<br>
             <br>
             Bahan olesan:  <br>
             - 1 butir kuning telur  <br> 
             - 1 sdt susu evaporasi<br>
             <br>
             Cara Membuat :<br>
             1. Tuangkan butter dan gula halus ke dalam wadah, lalu cukup mixer hingga merata.<br>
             2. Masukkan 2 butir kuning telur dan mixer kembali.<br>
             3. Masukkan tepung terigu, maizena, dan susu bubuk. Aduk adonan menggunakan spatula hingga adonan terlihat sudah bisa dibentuk.<br>
             Jika masih lembek, dapat ditambahkan tepung, tapi sedikit-sedikit saja.<br>
             4. Ambil adonan, pipihkan dan isi dengan isian nanas. Bentuk menjadi bola-bola sesuai selera dan ulangi langkah ini hingga adonan habis.<br>
             5. Masukkan ke dalam oven dengan suhu 100 hingga 120 derajat Celsius hingga matang.<br>
             6. Jika telah matang, tunggu nastar hingga dingin, baru olesi dengan bahan olesan.<br>
             7. Panggang kembali sampai warna kekuningan yang diinginkan.<br>
           </p>
     </div>
</div>
@endsection