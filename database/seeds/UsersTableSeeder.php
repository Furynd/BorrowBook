<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'administrator',
            'email' => 'admin@ad.min',
            'phone_number' => '123456789',
            'ktp_number' => '1234567890123456',
            'city_id' => 1,
            'is_admin' => true,
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'dummy',
            'email' => 'dummy@dum.my',
            'phone_number' => '123456789',
            'ktp_number' => '0123456789012345',
            'city_id' => 1,
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
    }
}
