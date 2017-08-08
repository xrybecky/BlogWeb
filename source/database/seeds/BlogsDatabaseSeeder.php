<?php

use Illuminate\Database\Seeder;
use App\Models\Blogs;

class BlogsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blogs::create([
            '_title' => 'Blog',
            '_text' => 'Hi, this is the blog!'
        ]);
    }
}
