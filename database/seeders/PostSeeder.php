<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title'=>"京都",
            'body'=>"たのしかったね～",
            'category_id'=>3
            ]);
        DB::table('posts')->insert([
            'title'=>"福岡",
            'body'=>"屋台でおいしいごはん食べました。",
            'category_id'=>2
            ]);
    }
}
