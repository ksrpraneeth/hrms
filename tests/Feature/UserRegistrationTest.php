<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegistrationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function user_should_be_registered()
    {
        $this->withoutExceptionHandling();
        $user = ['name' => 'PRANEETH KALLURI',
            'email' => 'test@ldrp.in',
            'username' => 'test_aee',
            'password' => 'test@123',
            'user_role' => '1',
        ];
        $response = $this->post('/api/register',$user);
        $response->assertOk();
        $this->assertCount(1, User::all());
        $this->assertArrayHasKey('token',$response->json('data'));

    }
}
