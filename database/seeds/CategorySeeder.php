<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
        		'name'	=>	'Argentina'
        	]);
        DB::table('categories')->insert([
        		'name'	=>	'China'
        	]);
        DB::table('categories')->insert([
        		'name'	=>	'Internacional'
        	]);
        DB::table('categories')->insert([
        		'name'	=>	'Italiana'
        	]);
        DB::table('categories')->insert([
        		'name'	=>	'Mexicana'
        	]);
        DB::table('categories')->insert([
        		'name'	=>	'Oriental'
        	]);
    }
}
