<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaire')->insert([
            'client_id' => '3',
            'produit_id' => '1',
            'build_date' =>  Carbon::create('1999', '01', '01'),
            'note' => '2.5',
            'text' => Str::random(20)
        ]);
    }
}
