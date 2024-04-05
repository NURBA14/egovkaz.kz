<?php

namespace App\Http\Controllers\Admin\Docs;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepositSearchRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function index()
    {
        return view("admin.docs.deposit");
    }

    public function search(DepositSearchRequest $request)
    {
        $user = User::with("properties", "autos")->where("iin", "=", $request->iin)->first();
        if($user){
            return view("admin.docs.search", compact("user"));
        }else{
            return redirect()->back()->with("error", "Нет такого гражданина");
        }

    }
}
