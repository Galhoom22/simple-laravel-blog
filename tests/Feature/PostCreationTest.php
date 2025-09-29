<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostCreationTest extends TestCase
{
    use RefreshDatabase; // This is a magic trait!

    /**
     * Test that a post can be successfully created.
     *
     * @return void
     */
    public function test_a_post_can_be_created(): void
    {
        // 1. Arrange: Prepare the necessary data
        $postData = [
            'title' => 'My Test Title',
            'body' => 'This is a test body with enough characters.',
        ];

        // 2. Act: Perform the action we want to test
        $response = $this->post('/posts', $postData);


        // 3. Assert: Check if the outcome is what we expected
        $response->assertStatus(302); // Assert the response is a redirect
        $response->assertRedirect('/'); // Assert it redirects to the homepage

        $this->assertDatabaseHas('posts', [
            'title' => 'My Test Title',
        ]); // Assert the post exists in the database
    }
}
