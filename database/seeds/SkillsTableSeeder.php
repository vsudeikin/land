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
              'img' => 'skills/linux.png' ],
            [ 'name' => 'GIT',
              'desc' => 'Использую систему контроля версий как локально так и по: ssh, git, https.',
              'img' => 'skills/github.png' ],
            [ 'name' => 'Composer',
              'desc' => 'Отличный инструмент для контроля зависимостей и версий, автозагрузки классов. Сейчас без него жить не возможно!',
              'img' => 'skills/composer.png' ],
            [ 'name' => 'HTML5',
              'desc' => 'Не вижу смысла тут что-то описывать.',
              'img' => 'skills/html5.png' ],  
            [ 'name' => 'CSS3',
              'desc' => 'Не вижу смысла тут что-то описывать.',
              'img' => 'skills/css3.png' ],
            [ 'name' => 'Bootstrap',
              'desc' => 'Понимаю и использую Bootstrap',
              'img' => 'skills/bootstrap.png' ],  
            [ 'name' => 'JavaScript',
              'desc' => 'Понимаю код. Могу отправить ajax в формате json. Принять ответ и немного покрутить front. Естественно под jquery библиотекой.',
              'img' => 'skills/JS.png' ],
            [ 'name' => 'MYSQL',
              'desc' => 'Система построения запросов, CRUD комманды, связанные таблицы, индексы... Использую ORM поэтому sql инъекции не страшны.',
              'img' => 'skills/mysql.png' ],
            [ 'name' => 'PHP',
              'desc' => 'ООП, MVC, PSR, LARAVEL',
              'img' => 'skills/php.jpg' ],
            [ 'name' => 'Английский',
              'desc' => 'Уровень B3 по CEFR (чтение технической документации, переписка, разговорный на среднем уровне)',
              'img' => 'skills/english.png' ]    
        ]);
    }
}