<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Elisoft', 'email' => 'elisofttech@test.com',  'password' => '12345678', 'status' => 1],
            ['id' => 2, 'name' => 'Ade', 'email' => 'ade123@gmail.com',  'password' => '12345678', 'status' => 2],
        ];

        DB::table('users')->insert($data);
    }
}
