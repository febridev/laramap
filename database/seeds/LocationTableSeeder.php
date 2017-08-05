<?php
use App\Location;
use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ne_NP');
        for ($i=0; $i < 100; $i++) { 
        	Location::create([
        			'district'=>$faker->district,
        			'city'=>$faker->cityName,
        			'lat'=>$faker->unique()->latitude(-6.89,-7.01),
        			'lng'=>$faker->unique()->latitude(107.6,108),
        		]);
        }
    }
}
