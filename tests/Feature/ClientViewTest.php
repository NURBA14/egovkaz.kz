<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ClientViewTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_home(): void
    {
        $response = $this->get('/');
        $response->assertOk();
    }

    public function test_criminal_search()
    {
        $response = $this->get("/criminal/search");
        $response->assertOk();
    }

    public function test_docs_deposit()
    {
        $user = User::create([
            "name" => "User1",
            "iin" => 123412341234,
            "telegram_user_id" => 1300688699,
            "password" => bcrypt("password"),
        ]);
        $user->verify = 1;
        $user->save();
        Auth::login($user);
        $response = $this->get("/client/docs/deposit");
        $response->assertOk();
    }

}
