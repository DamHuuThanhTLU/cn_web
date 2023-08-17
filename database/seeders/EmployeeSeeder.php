<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker=Faker::create();
        for($i=0;$i<50;$i++){
            DB::table('Employees')->insert([
                'name'=>$faker->name(),
                'address'=>$faker->address(),
                'salary' => $faker->randomFloat(2, 1000, 10000),
            ]);
        }

    }
}
