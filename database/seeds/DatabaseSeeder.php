<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutsTableSeeder::class);
        $this->call(EdusTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
    }
}
