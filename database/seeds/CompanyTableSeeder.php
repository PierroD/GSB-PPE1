<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => Str::random(10),
            'headoffice' => Str::random(10),
            'created_date' =>  Carbon::create('1999', '01', '01'),
        ]);
    }
}
