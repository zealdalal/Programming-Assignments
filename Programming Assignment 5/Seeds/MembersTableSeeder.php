<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
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
			DB::table('members')->insert([//,
				'organization' => $faker->company,
				'married'=>$faker->boolean($chanceOfGettingTrue = 45),
				'dob'=>$faker->dateTimeBetween($startDate='- 50 years', $endDate='-16 years'),
				'email'=>$faker->email,
				'password'=>$faker->password,
				'first_name'=>$faker->firstName($gender = 'male' | 'female'),
				'last_name'=>$faker->lastName,
				'gender'=>$faker->randomElement($array = array ('m' , 'f')),
				'active'=>$faker->boolean($chanceOfGettingTrue = 90),
				'created_at'=>$faker->dateTimeBetween($startDate = '-2 years' , $endDate = '-1 year'),
				'updated_at'=>$faker->dateTimeBetween($startDate = '-1 years' , $endDate = 'now'),
			]);
		}
    }
}
