<?php

namespace App\Http\Controllers\Client\Criminal;

use App\Http\Controllers\Controller;
use App\Models\Criminal;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $crimes = Criminal::orderBy("created_at", "DESC")->limit(6)->get();
        return view("client.criminal.search", compact("crimes"));
    }
}
