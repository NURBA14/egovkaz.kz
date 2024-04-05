<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Auto;
use App\Models\Property;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::count();
        $properties = Property::count();
        $autos = Auto::count();
        $regions = Region::count();;
        return view("admin.index", compact("users", "properties", "autos", "regions"));
    }
}
