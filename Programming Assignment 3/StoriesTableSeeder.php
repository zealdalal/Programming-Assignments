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
        // $this->call(UserTableSeeder::class);
		$faker=Faker\Factory::create();
		
		$limit=20;
		
		for($i=0; $i<$limit; $i++){
			DB::table('stories')->insert([//, 'title'=>$faker->word, 'story'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true), 'published'=>$faker->randomElement($array = array ('false','true')) , ]);
		}
    }
}