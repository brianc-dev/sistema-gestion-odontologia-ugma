<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_roles_exist(): void
    {
        $this->seed();
        $this->assertDatabaseHas('roles', [
            'nombre' => 'admin',
            'nombre' => 'admision',
            'nombre' => 'profesor',
            'nombre' => 'estudiante'
        ]);
    }

    public function test_4_roles_exist(): void
    {
        $this->seed();
        $this->assertDatabaseCount('roles', 4);
    }
}
