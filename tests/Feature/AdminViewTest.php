<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AdminViewTest extends TestCase
{
    use RefreshDatabase;

    public function login()
    {
        $user = User::create([
            "name" => "User14",
            "iin" => 123412341234,
            "telegram_user_id" => 1300688699,
            "password" => bcrypt("password"),
        ]);
        $user->verify = 1;
        $user->is_admin = 1;
        $user->save();
        Auth::login($user);
    }
    /**
     * A basic feature test example.
     */
    public function test_admin_home(): void
    {
        $this->login();
        $response = $this->get('/admin');
        $response->assertOk();
    }

    public function test_docs_deposit()
    {
        $this->login();
        $response = $this->get('/admin/docs/deposit');
        $response->assertOk();
    }

    public function test_admin_register()
    {
        $this->login();
        $response = $this->get("/admin/register");
        $response->assertOk();
    }
}
