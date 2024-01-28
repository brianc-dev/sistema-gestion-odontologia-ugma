<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_roles_exist(): void
    {
        $this->assertDatabaseHas('roles', [
            'nombre' => 'admin',
            'nombre' => 'admision',
            'nombre' => 'profesor',
            'nombre' => 'estudiante'
        ]);
    }

    public function test_4_roles_exist(): void
    {
        $this->assertDatabaseCount('roles', 4);
    }
}
