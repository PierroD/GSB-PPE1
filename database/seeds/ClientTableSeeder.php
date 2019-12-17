<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client')->insert([
            'last_name' => Str::random(10),
            'first_name' => Str::random(10),
            'company' => Str::random(10),
            'gender' => Str::random(1),
            'birth_date' =>  Carbon::create('1999', '01', '01'),
            'mail' => Str::random(10) . '@gmail.com',
            'password' => bcrypt('password'),
            'money' => '6',
            'fidelity' => Carbon::create('2010', '01', '01')
        ]);
    }
}
