<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_we_can_create_user(): void
    {
        $name = Str::random(10);
        $email = Str::random(10).'@example.com';

        $user = new User();
        $user->fill([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make('password'),
        ]);
        $user->save();

        $this->assertDatabaseHas(User::class, [
            'name' => $name
        ]);
    }
}
