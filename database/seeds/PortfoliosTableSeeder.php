<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [ 'name' => 'Colouryourlife',
              'desc' => '#',
              'img' => 'color.png' ],
            [ 'name' => 'RAP',
              'desc' => 'http://suval.com.ua/rap',
              'img' => 'rap.png' ],
            [ 'name' => 'YOUREST',
              'desc' => 'http://yourest.com.ua',
              'img' => 'rest.png' ],
        ]);
    }
}
