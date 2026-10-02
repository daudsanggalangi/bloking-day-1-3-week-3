<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        foreach (['/', '/about', '/home', '/siswa', '/welcome'] as $path) {
            $response = $this->get($path);

            $response->assertOk();
        }

        foreach (['/edit', '/delete', '/books/edit', '/books/delete'] as $path) {
            $response = $this->get($path);

            $response->assertRedirect('/books');
        }
    }
}
