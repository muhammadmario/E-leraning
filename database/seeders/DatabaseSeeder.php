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
            'name'=>'Dasar B.inggris',
            'slug'=>'dasar-b.inggris',
            'image'=>'image-classroom/dasar-b.inggris.jpg'
        ]);

        Category::create([
            'name'=>'Nastar',
            'classroom_id'=>1,
            'slug'=>'nastar',
            'image'=>'image-category/nastar.jpg'
        ]);

        Category::create([
            'name'=>'Mie ayam',
            'classroom_id'=>2,
            'slug'=>'mie-ayam',
            'image'=>'image-category/mie-ayam.jpg'
        ]);

        Category::create([
            'name'=>'Kopi',
            'classroom_id'=>3,
            'slug'=>'kopi',
            'image'=>'image-category/kopi.jpg'
        ]);

        Category::create([
            'name'=>'Jus',
            'classroom_id'=>4,
            'slug'=>'jus',
            'image'=>'image-category/jus.jpg'
        ]);

        Lesson::create([
            'name'=>'Nastar Keju',
            'category_id'=>1,
            'slug'=>'nastar-keju',
            'image'=>'image-category/jus.jpg',
            'video'=>'lesson-video/nastar.mp4',
            'body' => '<p>
            <br>
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
          </p>'
        ]);

        Lesson::create([
            'name'=>'Nastar Coklat',
            'category_id'=>1,
            'slug'=>'nastar-coklat',
            'image'=>'image-category/jus.jpg',
            'video'=>'lesson-video/nastar.mp4',
            'body' => '<p>
            <br>
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
          </p>'
        ]);

        
        Testimonial::create([
            'name'=>'Adi',
            'slug'=>'adi',
            'body'=>'Ditempat ini saya diberikan kesempatan untuk mengembalikan kepercayaan diri saya dan mampu merubah hidup saya',
            'image'=>'image-testimonial/kopi.jpg'
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
            'video'=>'homepage-video/nastar.mp4',
        ]);
    }
}
