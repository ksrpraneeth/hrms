<?php

namespace Tests\Feature;

class CustomTestCase extends \Tests\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\UserRolesSeeder::class);
    }
}
