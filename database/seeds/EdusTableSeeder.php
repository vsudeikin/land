<?php

use Illuminate\Database\Seeder;

class EdusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edus')->insert([
            [ 'name' => 'НТУУ КПИ',
              'desc' => 'ФАКС, метрология и измерительная техника, бакалавр ',
              'img' => 'kpi.png' ],
            [ 'name' => 'Курсы Английского',
              'desc' => 'American English School. Advenced level.',
              'img' => 'AmericanEnglish.png' ],
            [ 'name' => 'Основы программирования',
              'desc' => 'Computer Signce 50. Гарвард. prometeous',
              'img' => 'cs50.png' ],
            [ 'name' => 'Основы WEB',
              'desc' => 'HTML CSS JavaScript',
              'img' => 'html_prometheus.png' ],
            [ 'name' => 'LAMP',
              'desc' => 'Администрирование linux. Кирилл Семаев.',
              'img' => 'linux.png' ],  
            [ 'name' => 'Литература',
              'desc' => 'PHP7 в подлиннике. Дмитрий Котеров',
              'img' => 'book.png' ],
            [ 'name' => 'LARAVEL',
              'desc' => 'Курсы Web For Myself. Виктор Гавриленко.',
              'img' => 'laravel.png' ],
        ]);
    }
}
