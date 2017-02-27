<?php

use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('images')->insert([
        		'name'			=>	'republica.jpg',
        		'restaurant_id'	=>	'1'
        	]);
        DB::table('images')->insert([
        		'name'			=>	'laborcilla.jpg',
        		'restaurant_id'	=>	'2'
        	]);
        DB::table('images')->insert([
        		'name'			=>	'1810.jpg',
        		'restaurant_id'	=>	'3'
        	]);
        DB::table('images')->insert([
        		'name'			=>	'argentilia.jpg',
        		'restaurant_id'	=>	'4'
        	]);
    }
}
