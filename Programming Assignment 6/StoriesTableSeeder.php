<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
		
		$limit = 20;
		for($i=0;$i<$limit;$i++) {
			DB::table('stories')->insert([//,
				'location_id' => $faker-> numberBetween($min=1,$max=10), 
				'title' => $faker->title,
				'story' => $faker->paragraph(2),
				'published' => $faker->boolean($chanceOfGettingTrue=80),
			]);
		}
		
    }
}
