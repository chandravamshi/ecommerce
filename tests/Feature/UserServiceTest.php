<?php

namespace Tests\Unit;

use App\Models\User;
use App\Services\UserService;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserServiceTest extends TestCase
{
    // use DatabaseMigrations;
    // use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testItCanInstantiateUserService()
    {
        $this->assertInstanceOf(UserService::class, app()->make(UserService::class));
    }

    public function testItCanCreateUser()
    {
        $service = app()->make(UserService::class);
        $fakeData = $this->fakeUserData();
        $user = $service->createUser($fakeData);
        $this->assertNotEmpty($user->id);
        // echo($user->name);
        // $this->assertEquals($user->name, $fakeData['first_name']);
        $this->assertEquals($user->email, $fakeData['email']);
    }

    public function testItCanUpdateUser()
    {
        $createdUser  = User::first();
        $service = app()->make(UserService::class);
        $serviceResponse = $service->updateUser($createdUser, [
           'email' => 'new@email.com'
        ]);
        $this->assertTrue($serviceResponse);
        $updatedUser = User::first();
        // $this->assertEquals($updatedUser->name, 'updated name');
        $this->assertEquals($updatedUser->email, 'new@email.com');
        $this->assertEquals($updatedUser->id, $createdUser->id);
    }

    public function testItCanDeleteUser()
    {
        $createdUser = User::first();
        $service = app()->make(UserService::class);
        // $updatedUser = User::where('id', 2)->first();
        $serviceResponse = $service->deleteUser($createdUser, ['email' => 'new@email.com']);
        $this->assertTrue($serviceResponse);
        $this->assertCount(0, User::all());
    }



    private function createUser()
    {
        return User::create($this->fakeUserData());
    }

    /**
     * @return array
     */
    private function fakeUserData()
    {
        $faker = Faker::create();
        return [
          
          'email' => $faker->unique()->safeEmail,
          'password'  =>  '123456',
          'first_name'=>  $faker->name,
          'last_name' =>  $faker->name,
          'address'=>  $faker->address, 
          'city'=>  $faker->city,
          'country'=>  $faker->country,
        ];
    }


}
