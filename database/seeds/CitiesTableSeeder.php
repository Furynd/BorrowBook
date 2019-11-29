<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'Surabaya',
        ]);
        DB::table('cities')->insert([
            'name' => 'Jakarta',
        ]);
        DB::table('cities')->insert([
            'name' => 'Bandung',
        ]);
        DB::table('cities')->insert([
            'name' => 'Semarang',
        ]);
        DB::table('cities')->insert([
            'name' => 'Jogjakarta',
        ]);
    }
}
