<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'      => 'Admin',
                'email'     => 'admin@gmail.com',
                'password'  => bcrypt('admin123'),
                'position'  => 'administrasi',
                'phone'     => '0856651234276',
                'role_id'   => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name'      => 'Leader',
                'email'     => 'leader@gmail.com',
                'password'  => bcrypt('leader123'),
                'position'  => 'pimpinan',
                'phone'     => '087766591519',
                'role_id'   => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name'      => 'Staff IT',
                'email'     => 'staff@gmail.com',
                'password'  => bcrypt('staff123'),
                'position'  => 'Staff IT',
                'phone'     => '089655591512',
                'role_id'   => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name'      => 'Marketing',
                'email'     => 'marketing@gmail.com',
                'password'  => bcrypt('marketing123'),
                'position'  => 'Marketing',
                'phone'     => '085655591712',
                'role_id'   => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ]
        ];

        User::insert($users);
    }
}