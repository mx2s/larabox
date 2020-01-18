<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeControllerTests extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function Index_Should_return_200()
    {
        $response = $this->get('/api/v1');
        $response->assertStatus(200);
    }
}
