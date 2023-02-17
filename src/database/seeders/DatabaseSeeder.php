<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PeopleTableSeeder::class);#この文章がないとデータ挿入はできない
        $this->call(QuestionsTableSeeder::class);#この文章がないとデータ挿入はできない
        $this->call(ChoicesTableSeeder::class);#この文章がないとデータ挿入はできない
    }
}
