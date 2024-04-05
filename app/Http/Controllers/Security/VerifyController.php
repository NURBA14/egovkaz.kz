<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use App\Http\Requests\Security\VerifyUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VerifyController extends Controller
{
    public function index()
    {
        return view("security.verify");
    }

    public function store(VerifyUserRequest $request)
    {
        $code = DB::table("verify_codes")->where("user_id", "=", Auth::user()->id)->first();
        if ($code->code == $request->code) {
            User::find(Auth::user()->id)->update([
                "verify" => 1
            ]);
            DB::table("verify_codes")->where("user_id", "=", Auth::user()->id)->delete();
            return redirect()->route("client.home")->with("success", "You are verified");
        }
        return redirect()->back()->with("error", "Inncorect code");
    }
}
