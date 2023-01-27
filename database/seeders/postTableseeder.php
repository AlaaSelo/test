<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class postTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,100) as $index){


        DB::table('employees')->insert([
            'name'=>$faker->sentence(1),
            'email'=>$faker->sentence(1),
            'phone'=>'0999999999',
       ]);
    }
    }
}

