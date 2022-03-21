@extends('user.components.main')

@section('content')
<div class="flex flex-col">
    {{-- <h1 class="text-4xl font-light my-2">Tentang Kami</h1> --}}
    <div class="w-full flex flex-col md:flex-row my-2">
        <div class="w-full md:w-1/2  max-h-max">
            <img src="{{ asset('image/atensi-logo.png') }}" class="w-40 md:w-60 md:h-60 m-auto" alt="logo" >
        </div>
        <div class="w-full md:w-1/2  max-h-max">
            <img src="{{ asset('image/kemensos.png') }}" class="w-40 md:w-60 md:h-60 m-auto" alt="logo" >
        </div>
    </div> 
    <img src="{{ asset('image/banner.jpeg') }}" class="rounded-md my-2 mx-3" alt="banner">
    <div class="w-full flex flex-col md:flex-row my-2 md:gap-10 ">
        <div class="w-full md:w-1/2 max-h-max">
            <h1 class="text-base md:text-3xl text-center mb-3">Fungsi</h1>
            <ol class="list-decimal list-outside font-light text-justify text-sm md:text-base mx-6">
                <li>Perumusan, penetapan, dan pelaksanaan kebijakan di bidang rehabilitasi sosial, jaminan sosial, pemberdayaan sosial, perlindungan sosial, dan penanganan fakir miskin.</li>
                <li>Penetapan kriteria dan data fakir miskin dan orang tidak mampu.</li>
                <li>Penetapan standar rehabilitasi sosial.</li>
                <li>Koordinasi pelaksanaan tugas, pembinaan, dan pemberian dukungan administrasi kepada seluruh unsur organisasi dilingkungan Kementerian Sosial.</li>
                <li>Pengelolaan barang milik/kekayaan Negara yang menjadi tanggung jawab Kementerian Sosial.</li>
                <li>Pengawasan atas pelaksanaan tugas di lingkungan Kementerian Sosial.</li>
                <li>Pelaksanaan bimbingan teknis dan supervisi atas pelaksanaan urusan Kementerian Sosial di daerah.</li>
                <li>Pelaksanaan pendidikan dan pelatihan, penelitian dan pengembangan kesejahteraan sosial, serta penyuluhan sosial.</li>
                <li>Pelaksanaan dukungan yang bersifat substantif kepada seluruh unsur organisasi di lingkungan Kementerian Sosial</li>
            </ol>
        </div>
        <div class="w-full md:w-1/2  max-h-max">
            <h1 class="text-base md:text-3xl text-center mb-3">Tugas</h1>
            <p class="font-light text-justify text-sm md:text-base mx-6">Berdasarkan Peraturan Presiden No. 46 Tahun 2015 tentang Kementerian Sosial, dinyatakan bahwa Kementerian Sosial mempunyai tugas menyelenggarakan urusan di bidang rehabilitasi sosial, jaminan sosial, pemberdayaan sosial, perlindungan sosial, dan penanganan fakir miskin untuk membantu Presiden dalam menyelenggarakan pemerintahan Negara. dan inklusivitas.</p>
        </div>
    </div> 
</div>

@endsection