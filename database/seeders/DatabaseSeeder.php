<?php

namespace Database\Seeders;
use App\Models\Post;
USE App\Models\User;
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
         \App\Models\User::factory(5)->create();
         \App\Models\Post::factory(30)->create();

        //   User::create([
        //       'name'=>'Icha Putri Adestiani',
        //      'email'=>'Ichaputriadestiani@gmail.com',
        //      'password'=>bcrypt('123456')
        //   ]);

        // Post::create ([
        //  'user_id'=>1,
        //    'title'=>'Postingan Pertama',
        //    'slug'=>'postingan-pertama',
        //    'expert'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, possimus.',
        //    'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, omnis facere. Unde voluptate aut minus magnam illum magni amet distinctio.'
        // ]);

        // Post::create ([
        //    'user_id'=>1,
        //    'title'=>'Postingan Kedua',
        //    'slug'=>'postingan-kedua',
        //    'expert'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, possimus.',
        //    'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, omnis facere. Unde voluptate aut minus magnam illum magni amet distinctio.'
        // ]);

        // Post::create ([
        //    'user_id'=>1,
        //    'title'=>'Postingan Ketiga',
        //    'slug'=>'postingan-ketiga',
        //    'expert'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, possimus.',
        //    'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, omnis facere. Unde voluptate aut minus magnam illum magni amet distinctio.'
        // ]);

        // Post::create ([
        //    'user_id'=>1,
        //    'title'=>'Postingan Keempat',
        //    'slug'=>'postingan-keempat',
        //    'expert'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, possimus.',
        //    'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, omnis facere. Unde voluptate aut minus magnam illum magni amet distinctio.'
        // ]);

        // Post::create ([
        //    'user_id'=>1,
        //    'title'=>'Postingan Kelima',
        //    'slug'=>'postingan-kelima',
        //    'expert'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, possimus.',
        //    'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, omnis facere. Unde voluptate aut minus magnam illum magni amet distinctio.'
        // ]);
    }
}
