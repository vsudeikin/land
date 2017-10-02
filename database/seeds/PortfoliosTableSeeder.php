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
            [ 'name' => 'colouryourlife',
              'link' => '#',
              'img' => 'colouryourlife.jpg' ],
            [ 'name' => 'RAP',
              'link' => 'http://suval.com.ua/rap',
              'img' => 'rap.jpg' ],
            [ 'name' => 'YOUREST',
              'link' => 'http://yourest.com.ua',
              'img' => 'yourest.jpg' ],
        ]);
    }
}
