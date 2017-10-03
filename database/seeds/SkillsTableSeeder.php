<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('skills')->insert([
            [ 'name' => 'LAMP',
              'desc' => 'Установка, настройка в системе Debian: Apache, PHP, MYSQL, SSH, FTP, Virtual Host, phpmyadmin',
              'img' => 'linux.png' ],
            [ 'name' => 'GIT',
              'desc' => 'Использую систему контроля версий.',
              'img' => 'git.png' ],
            [ 'name' => 'Composer',
              'desc' => 'Использую Composer.',
              'img' => 'composer.png' ],
            [ 'name' => 'HTML5',
              'desc' => 'Отлично понимаю язык разметки.',
              'img' => 'html5.png' ],  
            [ 'name' => 'CSS3',
              'desc' => 'Понимаю стили.',
              'img' => 'css3.png' ],
            [ 'name' => 'Bootstrap',
              'desc' => 'Использую Bootstrap.',
              'img' => 'bootstrap.png' ],  
            [ 'name' => 'JavaScript',
              'desc' => 'Могу отправить ajax в формате json, под jquery библиотекой.',
              'img' => 'js.png' ],
            [ 'name' => 'MYSQL',
              'desc' => 'Использую ORM, не важно с какой базой работать.',
              'img' => 'mysql.png' ],
            [ 'name' => 'PHP',
              'desc' => 'ООП, MVC, PSR, LARAVEL 5.x',
              'img' => 'php.png' ],
            [ 'name' => 'Английский',
              'desc' => 'Уровень B3 по CEFR (чтение технической документации, переписка)',
              'img' => 'english.png' ]    
        ]);
    }
}
