<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $faker = \Faker\Factory::create();

        // Add the master administrator, user id of 1
        $users = [
            [
                'name'              => 'Super Admin',
                'email'             => 'super@admin.com',
                'password'          => Hash::make('secret'),
                'username'          => '100001',
                'email_verified_at' => Carbon::now(),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Ryxojuz',
                'email'             => 'ryxojuz@mailinator.com',
                'password'          => Hash::make('secret'),
                'username'          => '100002',
                'email_verified_at' => Carbon::now(),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Manager',
                'email'             => 'nosarejel@mailinator.com',
                'password'          => Hash::make('secret'),
                'username'          => '100003',
                'email_verified_at' => Carbon::now(),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Executive User',
                'email'             => 'cupepujul@mailinator.com',
                'password'          => Hash::make('secret'),
                'username'          => '100004',
                'email_verified_at' => Carbon::now(),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'General User',
                'email'             => 'qunotip@mailinator.com',
                'password'          => Hash::make('secret'),
                'username'          => '100005',
                'email_verified_at' => Carbon::now(),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ];

        foreach ($users as $user_data) {
            $user = User::create($user_data);
        }

        Schema::enableForeignKeyConstraints();
    }
}
