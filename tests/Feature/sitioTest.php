<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class sitioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/contacto/{codigo?}');

        $response->assertStatus(200);
    }

    public function test_landing()
    {
        $response = $this->get('/landingpage');

        $response->assertStatus(200);
    }

}
