<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre')->insert([
            'id'   => 1,
            'name' => 'Sci Fi',
        ]);

        DB::table('genre')->insert([
            'id'   => 2,
            'name' => 'Terror',
        ]);

        DB::table('genre')->insert([
            'id'   => 3,
            'name' => 'Action',
        ]);

        DB::table('films')->insert([
            'id'   => 1,
            'name' => 'Star Wars',
            'release_date' => '1970-05-10',
            'country' => 'United States',
            'rating' => '4.2',
            'ticket_price' => '10.00',
            'image' => 'noimage.jpg',
            'slugurl' => 'star-wars'
        ]);

        DB::table('films')->insert([
            'id'   => 2,
            'name' => 'Alien',
            'release_date' => '1990-05-10',
            'country' => 'United States',
            'rating' => '4.3',
            'ticket_price' => '12.00',
            'image' => 'noimage.jpg',
            'slugurl' => 'alien'
        ]);

        DB::table('films')->insert([
            'id'   => 3,
            'name' => 'Avengers',
            'release_date' => '2018-05-10',
            'country' => 'United States',
            'rating' => '4.8',
            'ticket_price' => '10.00',
            'image' => 'noimage.jpg',
            'slugurl' => 'avengers'
        ]);
    }
}
