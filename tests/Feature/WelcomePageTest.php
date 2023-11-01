<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_welcome_page_is_accessible()
    {
        $response = $this->get('/');

        $response->assertStatus(200); // Controleren op een HTTP 200 OK-status
        $response->assertViewIs('welcome'); // Controleren of de juiste welkomstpagina-weergave wordt gebruikt
    }
}
