<?php

namespace Database\Seeders;

use Automattic\Jetpack\Import\Endpoints\Customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customers::factory()->count(10)->create();
    }
}
