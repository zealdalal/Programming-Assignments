<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	 
    public function run()
    {
  /*
     //Run faker first and then add tags.  
		$faker = Faker\Factory::create();
		
		$limit = 20;
		
		for($i=0;$i<$limit;$i++) {
			DB::table('tags')->insert([//,
				'value'=>$faker->word,
			]);
		}
		
*/		
		$stories = App\Story::get();
        foreach ($stories as $story){
            $tag = rand(1, 20);
			$tag2 = rand(1, 20);
			$tag3 = rand(1, 20);
            $story->tags()->attach($tag);
			$story->tags()->attach($tag2);
			$story->tags()->attach($tag3);
    
	}

	}
	
	
}
