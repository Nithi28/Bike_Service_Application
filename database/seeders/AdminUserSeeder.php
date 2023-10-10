<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin =\App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@admin.com',
             'password' =>Hash::make('password'),
             'phone' =>'1234567890',
         ]);
         $admin->assignRole('admin');

        //  echo 'Admin User Seeding Successful';


        //  $customer =\App\Models\User::factory()->create([
        //     'name' => 'customer',
        //     'email' => 'customer@customer.com',
        //     'password' =>Hash::make('password'),
        //     'phone' =>'1234567810',
        // ]);
        // $customer->assignRole('customer');

        // echo 'customer User Seeding Successful';
    }
}
