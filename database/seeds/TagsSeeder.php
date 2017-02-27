<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tags')->insert([
        		'name'	=>	'Area de niños'
        	]);
        DB::table('tags')->insert([
        		'name'	=>	'Bar'
        	]);
        DB::table('tags')->insert([
        		'name'	=>	'Buffet'
        	]);
        DB::table('tags')->insert([
        		'name'	=>	'Cortes'
        	]);
        DB::table('tags')->insert([
        		'name'	=>	'Coctelería'
        	]);
        DB::table('tags')->insert([
        		'name'	=>	'Deportivo'
        	]);
        DB::table('tags')->insert([
        		'name'	=>	'Desayunos'
        	]);
        DB::table('tags')->insert([
        		'name'	=>	'Familiar'
        	]);
    }
}
