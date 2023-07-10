<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // tạo dữ liệu mẫu
        $this->call([ProductsSeeder::class,CustomersSeeder::class,CategorySeeder::class]);
        // \App\Models\User::factory(10)->create();
    }
}
