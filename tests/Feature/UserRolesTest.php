<?php

namespace Tests\Feature;

use App\Models\UserRoles;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class UserRolesTest extends CustomTestCase
{
    use RefreshDatabase;

    /**
     *
     * @test
     */

    public function user_should_get_user_admin_role()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/api/get_user_roles');
        $response->assertOk();
        $this->assertCount(1, UserRoles::all());
        $userRolesArray = UserRoles::all()->toArray();
        $this->assertEquals($userRolesArray,$response->json('data'));
    }
}
