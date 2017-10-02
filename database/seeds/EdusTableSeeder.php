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
            [ 'name' => 'Курсы Английского',
              'desc' => 'American English School. Advenced level.',
              'img' => 'AmericanEnglish.png' ],
            [ 'name' => 'Основы программирования',
              'desc' => 'Computer Signce 50. Гарвард. prometeous',
              'img' => 'CS50.jpeg' ],
            [ 'name' => 'НТУУ КПИ',
              'desc' => 'ФАКС, метрология и измерительная техника, бакалавр ',
              'img' => 'kpi.png' ],
            [ 'name' => 'Литература',
              'desc' => 'PHP7 в подлиннике. Дмитрий Котеров',
              'img' => 'php7.jpg' ],
            [ 'name' => 'LAMP',
              'desc' => 'Администрирование linux. Кирилл Семаев.',
              'img' => 'semaev.jpg' ],
            [ 'name' => 'LARAVEL',
              'desc' => 'Курсы Web For Myself. Виктор Гавриленко. Андрей Кудлай.',
              'img' => 'web_for_myself.jpg' ],
            [ 'name' => 'Основы WEB UI разработки',
              'desc' => 'HTML CSS JavaScript',
              'img' => 'webui_prometeus.jpg' ]
        ]);
    }
}
