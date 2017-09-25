<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'name' => 'Валентин Судейкин',
            'email' => 'vsudeikin@gmail.com',
            'date' => '1985-07-03',
            'phone' => '(096) 453-11-75',
            'img' => 'about/me.jpg'
        ]);
    }
}
