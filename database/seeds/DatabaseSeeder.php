<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CompanyTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(ProduitTableSeeder::class);
         $this->call(ImageTableSeeder::class);
         $this->call(CommentaireTableSeeder::class);
         $this->call(CategorieTableSeeder::class);
    }
}
