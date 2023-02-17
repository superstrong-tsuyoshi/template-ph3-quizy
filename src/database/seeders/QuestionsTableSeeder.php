<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'bigquestion_id' => 1,
            'image' => 'takanawa.jpg'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'bigquestion_id' => 1,
            'image' => 'kameido.jpg'
        ];
        DB::table('questions')->insert($param);
        $param = [
            'bigquestion_id' => 2,
            'image' => 'mukainada.jpg'
        ];
        DB::table('questions')->insert($param);
    }
}
