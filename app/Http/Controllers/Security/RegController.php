<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use App\Http\Requests\Security\RegRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegController extends Controller
{
    public function index()
    {
        return view("admin.security.index");
    }

    public function store(RegRequest $request)
    {
        User::create([
            "name" => $request->validated("name"),
            "iin" => $request->validated("iin"),
            "telegram_user_id" => $request->validated("telegram_user_id"),
            "password" => bcrypt($request->validated("password"))
        ]);
        return redirect()->back()->with("success", "Гражданин зарегестрирован");        
    }
}
