<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Classroom;
use App\Models\Gallery;
use App\Models\Lesson;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Videohomepage;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'=>'Admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'role'=> 1,
            'password'=>bcrypt('Bismillah08')
        ]);

        User::create([
            'name'=>'Guru BRSKPN Baturraden',
            'username'=>'GuruBaturraden',
            'email'=>'guru@gmail.com',
            'role'=> 2,
            'password'=>bcrypt('Bismillah08')
        ]);

        User::create([
            'name'=>'Muhammad Mario Wijatmika',
            'username'=>'Mario',
            'email'=>'mario@gmail.com',
            'role'=> 3,
            'password'=>bcrypt('Bismillah08')
        ]);

        Classroom::create([
            'name'=>'Makanan',
            'slug'=>'makanan',
            'image'=>'image-classroom/makanan.jpg'
        ]);

        Classroom::create([
            'name'=>'Minuman',
            'slug'=>'minuman',
            'image'=>'image-classroom/minuman.jpg'
        ]);

        Classroom::create([
            'name'=>'Mengemudi',
            'slug'=>'mengemudi',
            'image'=>'image-classroom/mengemudi.jpg'
        ]);

        Classroom::create([
            'name'=>'Bahasa',
            'slug'=>'bahasa',
            'image'=>'image-classroom/dasar-b.inggris.jpg'
        ]);

        Classroom::create([
            'name'=>'Microsoft Office',
            'slug'=>'microsoft-office',
            'image'=>'image-classroom/microsoft.jpg'
        ]);

        Category::create([
            'name'=>'Sosis',
            'classroom_id'=>1,
            'slug'=>'sosis',
            'image'=>'image-category/sosis.jpg'
        ]);

        Category::create([
            'name'=>'Pempek',
            'classroom_id'=>1,
            'slug'=>'pempek',
            'image'=>'image-category/pempek.jpg'
        ]);

        Category::create([
            'name'=>'Kopi',
            'classroom_id'=>2,
            'slug'=>'kopi',
            'image'=>'image-category/kopi.jpg'
        ]);

        Category::create([
            'name'=>'Jus',
            'classroom_id'=>2,
            'slug'=>'jus',
            'image'=>'image-category/jus.jpg'
        ]);

        Category::create([
            'name'=>'Mengemudi Mobil',
            'classroom_id'=>3,
            'slug'=>'mengemudi-mobil',
            'image'=>'image-category/mengemudi-mobil.jpg'
        ]);

        Category::create([
            'name'=>'Korespondensi B.inggris',
            'classroom_id'=>4,
            'slug'=>'korenspondensi-b.inggris',
            'image'=>'image-category/korespondensi-b.inggris.jpg'
        ]);

        Category::create([
            'name'=>'Ms.Excel',
            'classroom_id'=>5,
            'slug'=>'ms.excel',
            'image'=>'image-category/ms.excel.jpg'
        ]);

        Category::create([
            'name'=>'Ms.Word',
            'classroom_id'=>5,
            'slug'=>'ms.word',
            'image'=>'image-category/ms.word.jpg'
        ]);

        Lesson::create([
            'name'=>'Sosis Solo',
            'category_id'=>1,
            'slug'=>'sosis-solo',
            'image'=>'image-lesson/sosis-solo.jpg',
            'video'=>'lesson-video/sosis-solo.mp4',
            'body' => '
            <b>BAHAN PEMBUATAN SOSIS SOLO</b>
            <br>
            Isian:
            <ul>
                <li>Bawang putih yang sudah dihaluskan 100gr</li>
                <li>Garam 2 sendok teh</li>
                <li>Lada 1 sendok teh</li>
                <li>Gula Merah 50gr</li>
                <li>2 lembar Daun jeruk </li>
                <li>Bumbu Penyedap 150gr</li>
                <li>Ketumbar Halus 50gr</li>
                <li>Parutan Wortel 500gr</li>
                <li>Daging Ayam matang yg dicincang 500gr</li>
            </ul>
            <br>
            Kulit Lumpia:
            <ul>
                <li>Minyak goreng secukupnya</li>
                <li>Telur 2 butir</li>
                <li>Tepung terigu 250gr</li>
                <li>Garam 10gr</li>
                <li>Bumbu Penyedap Rasa 50gr</li>
                <li>Bawang Putih yang sudah dihaluskan 20gr</li>
                <li>Butter</li>
            </ul>
            <br>
            Cara Pembuatan Isian:
            <ol>
                <li>panaskan wajan dan tuangkan minyak goreng secukupnya</li>
                <li>masukan bawang putih yang sudah dihaluskan, tumis hingga harum</li>
                <li>kemudian masukan ketumbar halus, garam, lada bubuk, bumbu penyedap dan gula merah, aduk hingga bumbu merata dan harum. lalu masukan daun jeruk</li>
                <li>masukan parutan wortel, aduk sebentar. kemudian masukkan daging ayam yang sudah dicincang</li>
                <li>aduk hingga semua bahan isian tercampur merata dan berwarna menjadi kecokelatan</li>
            </ol>
            <br>
            Cara pembuatan Kulit Lumpia:
            <ol>
                <li>pecahkan 2 butir telur kedalam wadah lalu kocok dengan mixer hingga berbusa</li>
                <li>lalu masukan tepung terigu, dan kocok lagi hingga tercampur</li>
                <li>kemudian masukan bumbu-bumbu yang sudah disiapkan secara bersamaan dan tambahkan sedikit minyak</li>
                <li>aduk dengahn mixer hingga semua bumbu tercampur rata dan menjadi adonan, lalu pindahkan kedalam wadah</li>
                <li>panaskan wajan kebalik yang dikhususkan untuk membuat kulit lumpia, oleskan sedikit minyak agar tidak lengket</li>
                <li>jika wajan sudah cukup panas, masukan wajan cetakan tersebut keatas wadah adonan kulit lumpia, lalu letakkan lagi keatas kompor. jangan terlalu lama dan lakukan berulang-ulang</li>
                <li>jika kulit lumpia sudah jadi, masukan adonan isian yang sudah dibuat tadi secukupnya diatas kulit lumpia</li>
                <li>lalu lipat dan gulung kulit lumpia menutupi adonan isian</li>
                <li>rekatkan ujung kulit lumpia dengan sisa adonan kulit lumpia tadi</li>
                <li>diamkan sebentar, kemudian masak diatas minyak goreng panas hingga warnanya kecokelatan</li>
            <ol>
          '
        ]);

        // Lesson::create([
        //     'name'=>'Nastar Coklat',
        //     'category_id'=>1,
        //     'slug'=>'nastar-coklat',
        //     'image'=>'image-category/jus.jpg',
        //     'video'=>'lesson-video/nastar.mp4',
        //     'body' => '<p>
        //     <br>
        //     - 200 gr butter Wisjman<br>
        //     - 50 gr gula halus20 gr susu full cream bubuk<br>
        //     - 20 gr tepung maizena<br>
        //     - 250 gr tepung terigu Kunci Biru premium  <br>
        //     - 2 butir kuning telur <br>
        //     <br>
        //     Bahan isian:<br>
        //     - 4 buah nanas kupas yang telah diparut<br>
        //     - 1 batang kayu manis <br>
        //     - 100 gr gula pasir<br>
        //     <br>
        //     Bahan olesan:  <br>
        //     - 1 butir kuning telur  <br> 
        //     - 1 sdt susu evaporasi<br>
        //     <br>
        //     Cara Membuat :<br>
        //     1. Tuangkan butter dan gula halus ke dalam wadah, lalu cukup mixer hingga merata.<br>
        //     2. Masukkan 2 butir kuning telur dan mixer kembali.<br>
        //     3. Masukkan tepung terigu, maizena, dan susu bubuk. Aduk adonan menggunakan spatula hingga adonan terlihat sudah bisa dibentuk.<br>
        //     Jika masih lembek, dapat ditambahkan tepung, tapi sedikit-sedikit saja.<br>
        //     4. Ambil adonan, pipihkan dan isi dengan isian nanas. Bentuk menjadi bola-bola sesuai selera dan ulangi langkah ini hingga adonan habis.<br>
        //     5. Masukkan ke dalam oven dengan suhu 100 hingga 120 derajat Celsius hingga matang.<br>
        //     6. Jika telah matang, tunggu nastar hingga dingin, baru olesi dengan bahan olesan.<br>
        //     7. Panggang kembali sampai warna kekuningan yang diinginkan.<br>
        //   </p>'
        // ]);

        
        Testimonial::create([
            'name'=>'Adi',
            'slug'=>'adi',
            'body'=>'Ditempat ini saya diberikan kesempatan untuk mengembalikan kepercayaan diri saya dan mampu merubah hidup saya',
            'image'=>'image-testimonial/adi.jpg'
        ]);

        Testimonial::create([
            'name'=>'Messi',
            'slug'=>'messi',
            'body'=>' kepercayaan diri saya dan mampu merubah hidup saya',
            'image'=>'image-testimonial/kopi.jpg'
        ]);

        Testimonial::create([
            'name'=>'Ronaldo',
            'slug'=>'ronaldo',
            'body'=>'Ditempat ini saya diberikan kesempatan untuk mengembalikan',
            'image'=>'image-testimonial/kopi.jpg'
        ]);

        Gallery::create([
            'name'=>'penyerahan bantuan oleh menteri',
            'slug'=>'ronaldo',
            'body'=>'penyerahan bantuan oleh menteri sosial untuk wira usaha kepada eks residen IPWL PINTU HIJRAH, banda aceh- aceh',
            'image'=>'gallery-image/kopi.jpg'
        ]);

        Videohomepage::Create([
            'video'=>'homepage-video/intro.mp4',
        ]);
    }
}
