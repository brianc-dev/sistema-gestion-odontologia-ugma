<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\CreatesApplication;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_we_can_create_user(): void
    {
        $name = Str::random(10);
        $email = Str::random(10).'@example.com';
        $role = 2;

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make('password'),
            'role_id' => $role
        ]);

        $this->assertDatabaseHas(User::class, [
            'name' => $name,
            'role_id' => $role
        ]);
    }
}
