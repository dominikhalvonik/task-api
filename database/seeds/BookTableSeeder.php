<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book')->insert([
            'isbn' => '978-3-16-148410-47',
            'author' => 'Test',
            'title' => 'API',
            'published_at' => '2016-05-16',
            'rating' => 1,
        ]);
    }
}
