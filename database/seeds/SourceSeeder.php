<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('source')->insert($this->getData());
    }

    private function getData(): array
	{
		 $faker = \Faker\Factory::create('ru_RU');
         $data = [];

         for($i=0; $i < 10; $i++) {
            $data[] = [
            	 'source' => $faker->sentence(mt_rand(1, 1))
			];
		 }

         return $data;
	}
}
