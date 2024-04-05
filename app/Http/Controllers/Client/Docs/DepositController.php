<?php

namespace App\Http\Controllers\Client\Docs;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function index()
    {
        // $user = User::with("properties", "autos")->where("iin", "=", $)->first();
        $properties = Auth::user()->properties()->get();
        $autos = Auth::user()->autos()->get();
        return view("client.docs.deposit", compact("autos", "properties"));
    }
}
