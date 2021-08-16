<?php

namespace Tests\Feature;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function user_should_be_able_to_store_employee()
    {

        $response = $this->post('/api/employee', ['name' => 'Praneeth', 'fathername' => 'Seshagiri']);
        $response->assertOk();
        $this->assertCount(1, Employee::all());
    }

    /**
     * @test
     */
    public function user_should_be_able_get_all_employees()
    {
        $this->post('/api/employee', ['name' => 'Praneeth', 'fathername' => 'Seshagiri']);

        $response = $this->get('/api/employee');
        $response->assertOk();
        $this->assertCount(1, $response->json('data'));
    }
}
