<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RutasTest extends TestCase
{
    public function test_RutaHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_RutaServicios()
    {
        $response = $this->get('/Servicios');

        $response->assertStatus(200);
    }

    public function test_RutaAcerca()
    {
        $response = $this->get('/Acerca');

        $response->assertStatus(200);
    }

    public function test_Contacto()
    {
        $response = $this->get('/Contacto');

        $response->assertStatus(200);
    }
}
