<?php

use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('phone')->insert([
            'phone' => 03012212123,
            'user_id' => 1,
        ]);
    }
}
