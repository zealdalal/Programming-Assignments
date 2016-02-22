<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
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
			DB::table('locations')->insert([//, 'value'=>$faker->city.', '. $faker->stateAbbr,]);
		}
    }
}
