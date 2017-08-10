<?php

use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            '_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porta semper ornare. Sed posuere scelerisque condimentum. Nam eu magna viverra, hendrerit felis eget, aliquam enim. Proin hendrerit ultricies lacus, sed scelerisque metus dapibus a. Nam scelerisque tristique lorem. Suspendisse lectus mauris, malesuada quis sodales sed, consectetur et enim. Aliquam erat volutpat. Donec hendrerit efficitur felis in aliquam. Suspendisse id massa nec sapien congue pretium. Fusce a sodales orci. Quisque et lobortis nisl, sed rutrum justo. Etiam volutpat congue lorem sit amet rutrum.'
        ]);
    }
}
