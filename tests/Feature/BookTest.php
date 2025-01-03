<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_book()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/books', [
            'title' => 'Sample Book',
            'description' => 'A detailed description of the book.',
            'author' => 'John Doe',
            'price' => 19.99,
        ]);

        $response->assertRedirect('/books');
        $this->assertDatabaseHas('books', ['title' => 'Sample Book']);
    }

}
