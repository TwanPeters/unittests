<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

// Globaal mis ik code commentaar. Zou je dit willen toevoegen? 

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register()
    {
        // Bij de registratie ga je op dit moment uit van statische dummy data. 
        // Door verschillende gegevens te gebruiken is het testen globaler en gericht op de eindgebruiker
        // Je weet namelijk van te voren niet wat een eindgebruiker zou gaan invullen. 

        // om dummy data te genereren kun je gebruik maken van "faker" -> user Illuminate\Foundation\Testing\WithFaker;
        
        $response = $this->post('/register', [
            'name' => 'Twan Peters',
            'email' => 'twanpeters04@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
        $response->assertStatus(302);
        // Kun je controleren of de gegevens van de gebruiker die is geregistreerd ook echt in de database staan? 

        // Kun je controleren of het wachtwoord echt ge-encrypt is opgeslagen? 

        $this->assertAuthenticated();         // Mooie check!

    }
}
