<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData()
    {
        $faker = \Faker\Factory::create('ru_RU');
        $data = [];

        for ($i = 1; $i < 6; $i++) {
            for ($j = 0; $j < 10; $j++) {
                $data[] = [
                    'title' => $faker->sentence(mt_rand(1, 1)),
                    'text' => $faker->realText(mt_rand(50, 100)),
                    'category_id' => $i
                ];
            }
        }

        return $data;
    }
}
