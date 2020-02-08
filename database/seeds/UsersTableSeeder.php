<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        User::create([
            
            'email' => $faker->unique()->safeEmail,
            'password'  =>  bcrypt('password'),
            'first_name'=>  $faker->name,
            'last_name' =>  $faker->name,
            'address'=>  $faker->address, 
            'city'=>  $faker->city,
            'country'=>  $faker->country,
        ]);
        
    }
    
}
