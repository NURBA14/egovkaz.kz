<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class SecurityViewTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_login(): void
    {
        $response = $this->get('/login');
        $response->assertOk();
    }

    public function test_verify()
    {
        $user = User::create([
            "name" => "User12345",
            "iin" => 123412341234,
            "telegram_user_id" => 1300688699,
            "password" => bcrypt("password"),
        ]);
        $user->verify = 0;
        $user->save();
        Auth::login($user);
        $response = $this->get("/verify");
        $response->assertOk();
    }
}
