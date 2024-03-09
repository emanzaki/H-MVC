<?php

namespace Customers\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Customer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Customers\Models\Customer::create([
            'name'=>'asdasd'
        ]);
    }
}
