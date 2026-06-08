<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class loginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('login');
    }
    
}
