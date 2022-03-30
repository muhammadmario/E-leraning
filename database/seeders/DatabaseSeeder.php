<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Classroom;
use App\Models\User;
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
            'slug'=>'nastar',
            'image'=>'image-category/nastar.jpg'
        ]);

        Category::create([
            'name'=>'Mie ayam',
            'slug'=>'mie-ayam',
            'image'=>'image-category/mie-ayam.jpg'
        ]);

        Category::create([
            'name'=>'Kopi',
            'slug'=>'kopi',
            'image'=>'image-category/kopi.jpg'
        ]);

        Category::create([
            'name'=>'Jus',
            'slug'=>'jus',
            'image'=>'image-category/jus.jpg'
        ]);
    }
}
