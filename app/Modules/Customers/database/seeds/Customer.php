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
        \App\Models\User::create([
            'name'=>'asdasd',
            'email'=>'asd@asd.com',
            'password'=>bcrypt('password')
        ]);
    }
}
