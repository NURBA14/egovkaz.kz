<?php

namespace App\Http\Controllers\Security;

use App\Events\VerifyUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Security\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("security.login");
    }

    public function store(LoginRequest $request)
    {
        if (
            Auth::attempt([
                "iin" => $request->iin,
                "password" => $request->password
            ])
        ) {
            event(new VerifyUser());
            return redirect()->route("verify.index")->with("success", "check your telegram");
        }
        return redirect()->back()->with("error", "inncorect iin or password");
    }

    public function logout()
    {
        User::find(Auth::user()->id)->update([
            "verify" => 0
        ]);
        Auth::logout();
        return redirect()->route("login.index");
    }


}
