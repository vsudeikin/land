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
              'img' => 'edu/AmericanEnglish.png' ],
            [ 'name' => 'Основы программирования',
              'desc' => 'Computer Signce 50. Гарвард. prometeous',
              'img' => 'edu/CS50.jpeg' ],
            [ 'name' => 'НТУУ КПИ',
              'desc' => 'ФАКС, метрология и измерительная техника, бакалавр ',
              'img' => 'edu/kpi.png' ],
            [ 'name' => 'Литература',
              'desc' => 'PHP7 в подлиннике. Дмитрий Котеров',
              'img' => 'edu/php7.jpg' ],
            [ 'name' => 'LAMP',
              'desc' => 'Администрирование linux. Кирилл Семаев.',
              'img' => 'edu/semaev.jpg' ],
            [ 'name' => 'LARAVEL',
              'desc' => 'Курсы Web For Myself. Виктор Гавриленко. Андрей Кудлай.',
              'img' => 'edu/web_for_myself.jpg' ],
            [ 'name' => 'Основы WEB UI разработки',
              'desc' => 'HTML CSS JavaScript',
              'img' => 'edu/webui_prometeus.jpg' ]
        ]);
    }
}
