<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            CategorySeeder::class,
            PostSeeder::class
            
            ]);
        //ほかのSeederクラスを呼び出すことでまとめてデータを追加できる。
        //おそらくチームで作業するときはこれをどのタイミングのSeederかなどでまとめて作っていって
        //ほかの人が必要なら一気にデータを追加できるようにしている？？
    }
}
