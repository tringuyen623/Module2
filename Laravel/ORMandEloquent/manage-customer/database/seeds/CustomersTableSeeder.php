<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('customers')->insert([
                'name' => Str::random(10),
                'phone' => rand(),
                'email' => Str::random(10) . '@gmail.com',
                'city_id' => rand(1,20)
            ]);
        }
    }
}
