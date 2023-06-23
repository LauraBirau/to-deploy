<?php

namespace Database\Seeders;

use App\Models\Foo;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->has(Foo::factory(3))->create();
    }
}
