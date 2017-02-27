<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        Model::unguard();

        $this->call(CategorySeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(RestaurantsSeeder::class);
        $this->call(ImagesSeeder::class);

        Model::reguard();
    }
}
