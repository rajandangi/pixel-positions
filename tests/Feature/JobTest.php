<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class JobTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        // Arrange: Create required data
        Artisan::call('db:seed',['--class' => 'JobSeeder']);

        // Act: Make request
        $response = $this->get('/');

        // Assert: Check response status
        $response->assertStatus(200);
    }
}
