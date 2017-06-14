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
        		'adress'		=>	'Av. Constituyentes Pte. 59, Colonia Casa Blanca.',
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
        DB::table('restaurants')->insert([
                'name'          =>  'Roots Queretaro',
                'adress'        =>  'Avenida Industrialización 12, Alamos 2da Sección.',
                'email'         =>  'roots@gmail.com',
                'phone'         =>  '4423250376',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/Roots+Querétaro/@20.6048389,-100.3808985,15z/data=!4m5!3m4!1s0x0:0xc4c8c38f4cb4816f!8m2!3d20.6048389!4d-100.3808985",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '13:00',
                'close_hour'    =>  '01:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '3'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'Hacienda el Salitre',
                'adress'        =>  'Rafael Osuna SN, Col. Raquet Club, Raquet Club.',
                'email'         =>  '@gmail.com',
                'phone'         =>  '4423674537',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/Hacienda+El+Salitre/@20.6671689,-100.4263225,15z/data=!4m5!3m4!1s0x0:0x44db13d45da20ce4!8m2!3d20.6671689!4d-100.4263225",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '08:00',
                'close_hour'    =>  '01:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '3'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'Mochomos',
                'adress'        =>  'Boulevard Bernardo Quintana 5260-1D, Colinas del Parque.',
                'email'         =>  'mochomos@gmail.com',
                'phone'         =>  '4434131245',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/Mochomos+Querétaro/@20.6069854,-100.3777312,15z/data=!4m5!3m4!1s0x0:0x2412d707ccce34ed!8m2!3d20.6069854!4d-100.3777312",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '13:00',
                'close_hour'    =>  '00:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '5'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'Bruno',
                'adress'        =>  'Boulevard Bernardo Quintana 5260, Alamos 1ra Sección, Residencial Viveros.',
                'email'         =>  'bruno@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/Bruno+Cucina/@20.6070648,-100.3777842,15z/data=!4m5!3m4!1s0x0:0xe35f415e12ffeb4f!8m2!3d20.6070648!4d-100.3777842",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '13:00',
                'close_hour'    =>  '23:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '2'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'Trapio',
                'adress'        =>  'Boulevard Bernardo Quintana 119, Loma Dorada.',
                'email'         =>  'trapio@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/El+Trapio/@20.5954083,-100.3702542,15z/data=!4m5!3m4!1s0x0:0xf560ad32b728115c!8m2!3d20.5954083!4d-100.3702542",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '14:00',
                'close_hour'    =>  '23:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '1'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'Taberno el Quillo',
                'adress'        =>  'Paseo de la Republica 135 Zona Industrial Jurica.',
                'email'         =>  'tabernaquillo@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/Taberna+El+Quillo/@20.6575861,-100.4318649,15z/data=!4m5!3m4!1s0x0:0xd40d72b48c5147a!8m2!3d20.6575861!4d-100.4318649",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '13:00',
                'close_hour'    =>  '00:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '5'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'La Estancia Argentina',
                'adress'        =>  'Av Constituyentes 193, Casa Blanca.',
                'email'         =>  'estanciaargentina@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/La+Estancia+Argentina/@20.578056,-100.401323,15z/data=!4m5!3m4!1s0x0:0x5a939e7ad817b082!8m2!3d20.578056!4d-100.401323",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '12:00',
                'close_hour'    =>  '22:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '2'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'Santomar',
                'adress'        =>  'San Luis Potosí - Santiago de Querétaro 12401, Colonia El Salitre.',
                'email'         =>  'santomar@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/Santomar/@20.6748305,-100.4378561,15z/data=!4m5!3m4!1s0x0:0xe22d07fb310d8acd!8m2!3d20.6748305!4d-100.4378561",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '14:00',
                'close_hour'    =>  '22:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '1'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'Josecho',
                'adress'        =>  'Dalia 1, Fracc. Orquideas, Orquideas.',
                'email'         =>  'Josecho@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/Restaurante+Josecho/@20.573344,-100.405712,15z/data=!4m5!3m4!1s0x0:0x48007f2e129e3fe6!8m2!3d20.573344!4d-100.405712",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '13:00',
                'close_hour'    =>  '01:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '5'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'Chucho el Roto',
                'adress'        =>  'Av. Luis Pasteur Sur 16, Centro.',
                'email'         =>  'chucho@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/El+Mesón+de+Chucho+El+Roto/@20.5926888,-100.3893663,15z/data=!4m5!3m4!1s0x0:0x6cd8f612e0bcf6ca!8m2!3d20.5926888!4d-100.3893663",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '13:00',
                'close_hour'    =>  '23:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '5'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'La Casa Verde',
                'adress'        =>  'Av. Constituyentes 35 Pte., Col. Lomas de Querétaro, Lomas de Queretaro.',
                'email'         =>  'casaverde@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/Restaurante+La+Casa+Verde/@20.5719,-100.4060496,15z/data=!4m5!3m4!1s0x0:0x607a0460461b6495!8m2!3d20.5719!4d-100.4060496",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '13:00',
                'close_hour'    =>  '01:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '2'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'Caserío',
                'adress'        =>  'Av. Constituyentes 101 Pte, Casa Blanca.',
                'email'         =>  'caserio@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/El+Caserio/@20.5824456,-100.3965484,15z/data=!4m5!3m4!1s0x0:0x456c30964e40f873!8m2!3d20.5824456!4d-100.3965484",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '12:00',
                'close_hour'    =>  '23:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '1'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'La Bocha',
                'adress'        =>  'Blvrd Hacienda del Jacal 709B, El Jacal.',
                'email'         =>  'bocha@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/La+Bocha/@20.5827834,-100.4029975,15z/data=!4m8!1m2!2m1!1sla+bocha!3m4!1s0x85d35b364533f3c1:0x62c3df59e944b99a!8m2!3d20.5981175!4d-100.3744137",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '12:00',
                'close_hour'    =>  '00:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '5'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  'L\'Osteria De Il Duomo',
                'adress'        =>  'Centro Comercial Antea, Carr. Querétaro San Luis Potosí 12401, Local 107.',
                'email'         =>  'osteria@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "https://www.google.com.mx/maps/place/L'Osteria+De+Il+Duomo/@20.6754135,-100.4377255,15z/data=!4m5!3m4!1s0x0:0xde5cace22cb13206!8m2!3d20.6754135!4d-100.4377255",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '12:00',
                'close_hour'    =>  '23:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '1'
            ]);
        /*DB::table('restaurants')->insert([
                'name'          =>  '',
                'adress'        =>  '',
                'email'         =>  'conocido@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '12:00',
                'close_hour'    =>  '00:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '5'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  '',
                'adress'        =>  '',
                'email'         =>  '@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '13:00',
                'close_hour'    =>  '00:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '2'
            ]);
        DB::table('restaurants')->insert([
                'name'          =>  '',
                'adress'        =>  '',
                'email'         =>  '@gmail.com',
                'phone'         =>  '4423134881',
                'link_maps'     =>  "",
                'start_day'     =>  'Lunes',
                'finish_day'    =>  'Domingo',
                'open_hour'     =>  '11:00',
                'close_hour'    =>  '02:00',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'category_id'   =>  '1'
            ]);*/
    }
}
