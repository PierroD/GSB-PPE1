<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produit')->insert([
            'user_id' => '1',
            'title' => Str::random(10),
            'composition' => Str::random(10),
            'description' => Str::random(10),
            'grade' => '2.5',
            'version' => Str::random(10),
            'price' => '8.5',
            'logo' => Str::random(10),
            'purchase_number' => '10',
        ]);
    }
}
