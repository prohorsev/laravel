<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    private function getData(): array
	{
		 $faker = \Faker\Factory::create('ru_RU');
         $data = [];

         for($i=0; $i < 5; $i++) {
            $data[] = [
            	 'category' => $faker->sentence(mt_rand(3, 10))
			];
		 }

         return $data;
	}
}
