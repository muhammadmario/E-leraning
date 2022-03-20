@extends('user.components.main')

@section('content')
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

@endsection