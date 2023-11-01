<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Factories\Factory; 

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_login()
    {
        $user = Factory::factoryForModel(\App\User::class)->create([
            'email' => 'twanpeters04@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $response = $this->post('/login', [
            'email' => 'twanpeters04@gmail.com',
            'password' => 'password',
        ]);
        $response->assertStatus(302); 
        $this->assertAuthenticatedAs($user); 
    }
}
