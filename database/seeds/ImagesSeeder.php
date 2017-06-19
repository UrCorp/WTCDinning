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
                'name'          =>  'republica.png',
                'restaurant_id' =>  '1'
            ]);
        DB::table('images')->insert([
                'name'          =>  'laborcilla.png',
                'restaurant_id' =>  '2'
            ]);
        DB::table('images')->insert([
                'name'          =>  '1810.png',
                'restaurant_id' =>  '3'
            ]);
        DB::table('images')->insert([
                'name'          =>  'argentilia.png',
                'restaurant_id' =>  '4'
            ]);
        DB::table('images')->insert([
                'name'          =>  'roots.png',
                'restaurant_id' =>  '5'
            ]);
        DB::table('images')->insert([
                'name'          =>  'salitre.png',
                'restaurant_id' =>  '6'
            ]);
        DB::table('images')->insert([
                'name'          =>  'mochomos.jpg',
                'restaurant_id' =>  '7'
            ]);
        DB::table('images')->insert([
                'name'          =>  'bruno.jpg',
                'restaurant_id' =>  '8'
            ]);
        DB::table('images')->insert([
                'name'          =>  'trapio.png',
                'restaurant_id' =>  '9'
            ]);
        DB::table('images')->insert([
                'name'          =>  'quillo.png',
                'restaurant_id' =>  '10'
            ]);
        DB::table('images')->insert([
                'name'          =>  'estanciaargentina.png',
                'restaurant_id' =>  '11'
            ]);
        DB::table('images')->insert([
                'name'          =>  'santomar.jpg',
                'restaurant_id' =>  '12'
            ]);
        DB::table('images')->insert([
                'name'          =>  'josecho.png',
                'restaurant_id' =>  '13'
            ]);
        DB::table('images')->insert([
                'name'          =>  'chucho.png',
                'restaurant_id' =>  '14'
            ]);
        DB::table('images')->insert([
                'name'          =>  'casaverde.png',
                'restaurant_id' =>  '15'
            ]);
        DB::table('images')->insert([
                'name'          =>  'caserio.png',
                'restaurant_id' =>  '16'
            ]);
        DB::table('images')->insert([
                'name'          =>  'bocha.jpg',
                'restaurant_id' =>  '17'
            ]);
        DB::table('images')->insert([
                'name'          =>  'osteria.png',
                'restaurant_id' =>  '18'
            ]);
        /*DB::table('images')->insert([
                'name'          =>  '.jpg',
                'restaurant_id' =>  '19'
            ]);
        DB::table('images')->insert([
                'name'          =>  '.jpg',
                'restaurant_id' =>  '20'
            ]);*/
    }
}
