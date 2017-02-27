<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model; 

class RestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
        		'name'			=> 	'La República',
        		'adress'		=>	'Av. Universidad Oriente 353, Alamos 1ra Sección.',
        		'email'			=>	'republica@gmail.com',
        		'phone' 		=>	'44221307499',
        		'link_maps'		=>	"https://www.google.com.mx/maps/dir/''/''/@20.6009442,-100.4494329,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x85d35b30bd1d2c03:0xfd08f90fe41fe74e!2m2!1d-100.3793925!2d20.6009583",
        		'start_day' 	=>	'Lunes',
        		'finish_day'	=>	'Domingo',
        		'open_hour' 	=>	'13:00',
        		'close_hour'	=>	'23:00',
        		'description'	=>	'Mesón de gastronomía mexicana.',
        		'category_id' 	=>	'5'
        	]);
        DB::table('restaurants')->insert([
        		'name'			=> 	'Hacienda la Laborcilla',
        		'adress'		=>	'Prol. Corregidora Nte. 911 bis, Parques Residenciales, Plaza del Parque.',
        		'email'			=>	'laborcilla@gmail.com',
        		'phone' 		=>	'4422451694',
        		'link_maps'		=>	"https://www.google.com.mx/maps/dir/''/''/data=!4m5!4m4!1m0!1m2!1m1!1s0x85d35b1eb8ac380b:0x61974161cb9f39bc?sa=X&ved=0ahUKEwjw4t7T-6HSAhXk8YMKHRnRAwoQ9RcICzAA",
        		'start_day' 	=>	'Lunes',
        		'finish_day'	=>	'Domingo',
        		'open_hour' 	=>	'08:00',
        		'close_hour'	=>	'00:00',
        		'description'	=>	'Una casona elegante con decoraciones eclécticas.',
        		'category_id' 	=>	'3'
        	]);
        DB::table('restaurants')->insert([
        		'name'			=> 	'Restaurante 1810',
        		'adress'		=>	'Plaza de Armas, Calle Andador Libertad 62, Centro Histórico.',
        		'email'			=>	'1810@gmail.com',
        		'phone' 		=>	'4422143324',
        		'link_maps'		=>	"https://www.google.com.mx/maps/dir/''/''/data=!4m5!4m4!1m0!1m2!1m1!1s0x85d35a98225ab91b:0x88970560597853d2?sa=X&ved=0ahUKEwiNkZSJ-6HSAhWIy4MKHezeCdkQ9RcICzAA",
        		'start_day' 	=>	'Lunes',
        		'finish_day'	=>	'Domingo',
        		'open_hour' 	=>	'08:00',
        		'close_hour'	=>	'23:00',
        		'description'	=>	'Emblemático y céntrico lugar mexicano.',
        		'category_id' 	=>	'5'
        	]);
        DB::table('restaurants')->insert([
        		'name'			=> 	'Argentilia',
        		'adress'		=>	'Av. Constituyentes Pte. 59, Colonia Casa Blanca, Santiago de Querétaro, Qro.',
        		'email'			=>	'argentilia@gmail.com',
        		'phone' 		=>	'4422160685',
        		'link_maps'		=>	"https://www.google.com.mx/maps/dir/''/''/data=!4m5!4m4!1m0!1m2!1m1!1s0x85d345299b2fe013:0x2616a5fcc320737?sa=X&ved=0ahUKEwi49Mvw-6HSAhVG54MKHQlVAxYQ9RcICzAA",
        		'start_day' 	=>	'Lunes',
        		'finish_day'	=>	'Domingo',
        		'open_hour' 	=>	'13:30',
        		'close_hour'	=>	'23:00',
        		'description'	=>	'Restaurante con terraza luminosa, sirve cortes argentinos, pastas y vino.',
        		'category_id' 	=>	'1'
        	]);
        /*DB::table('restaurants')->insert([
        		'name'			=> 	'',
        		'adress'		=>	'',
        		'email'			=>	'@gmail.com',
        		'phone' 		=>	'',
        		'link_maps'		=>	"",
        		'start_day' 	=>	'Lunes',
        		'finish_day'	=>	'Domingo',
        		'open_hour' 	=>	'13:00',
        		'close_hour'	=>	'23:00',
        		'description'	=>	'',
        		'category_id' 	=>	''
        	]);
        DB::table('restaurants')->insert([
        		'name'			=> 	'',
        		'adress'		=>	'',
        		'email'			=>	'@gmail.com',
        		'phone' 		=>	'',
        		'link_maps'		=>	"",
        		'start_day' 	=>	'Lunes',
        		'finish_day'	=>	'Domingo',
        		'open_hour' 	=>	'13:00',
        		'close_hour'	=>	'23:00',
        		'description'	=>	'',
        		'category_id' 	=>	''
        	]);
        DB::table('restaurants')->insert([
        		'name'			=> 	'',
        		'adress'		=>	'',
        		'email'			=>	'@gmail.com',
        		'phone' 		=>	'',
        		'link_maps'		=>	"",
        		'start_day' 	=>	'Lunes',
        		'finish_day'	=>	'Domingo',
        		'open_hour' 	=>	'13:00',
        		'close_hour'	=>	'23:00',
        		'description'	=>	'',
        		'category_id' 	=>	''
        	]);*/
    }
}
