<?php

use Illuminate\Database\Seeder;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 30)->create();
    }
}
