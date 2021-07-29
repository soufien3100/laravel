<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('books')->insert([
                'title'=>'la huiteme couleur',
                'author' => 'Pratchett',
                'publication_year' => 2000,
                'genre' => 'fantasy burlesque',
                'synopsis' =>" un terre plate sur le dos"
            ]);

    }
}
