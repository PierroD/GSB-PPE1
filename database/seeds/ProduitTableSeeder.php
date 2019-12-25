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
            'client_id' => '2',
            'title' => Str::random(10),
            'composition' => Str::random(10),
            'description' => Str::random(10),
            'grade' => '3.5',
            'version' => Str::random(10),
            'price' => '5.5',
            'logo' => Str::random(10),
            'purchase_number' => '10',
        ]);
    }
}
