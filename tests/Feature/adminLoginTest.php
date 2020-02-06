<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class adminLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLandingPage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Homepage');
    }
    public function adminLogin()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
        $response->assertSee('Dashboard');
    }
}
