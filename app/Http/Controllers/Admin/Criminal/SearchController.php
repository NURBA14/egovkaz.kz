<?php

namespace App\Http\Controllers\Admin\Criminal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Criminal\SearchRequest;
use App\Models\Criminal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crimes = Criminal::orderBy("created_at", 'DESC')->paginate(10);
        return view("admin.criminal.index", compact("crimes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.criminal.search");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SearchRequest $request)
    {
        $path = $request->file("image")->store("criminals");
        Criminal::create([
            "fio" => $request->validated("fio"),
            "crime" => $request->validated("crime"),
            "image" => $path
        ]);
        return redirect()->back()->with("success", "Пост сохранен");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crime = Criminal::findOrFail($id);
        Storage::delete($crime->image);
        $crime->delete();
        return redirect()->back()->with("success", "Пост удален");
    }
}
