<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cats.index', [
            'cats' => DB::table('cats')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('cats')->insert([
            'name' => $request->name,
            'breed' => $request->breed,
            'age' => $request->age,
            'ownerName' => $request->ownerName,
            'ownerEmail' => $request->ownerEmail,
            'vaccinated' => $request->vaccinated,
            'image_url' => $request->image_url
        ]);

        return redirect('/cats')->with('success', 'Kitty created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('cats.show', [
            'cat' => DB::table('cats')->where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('cats.edit', [
            'cat' => DB::table('cats')->where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        DB::table('cats')->where('id', $id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'breed' => $request->breed,
            'age' => $request->age,
            'ownerName' => $request->ownerName,
            'ownerEmail' => $request->ownerEmail,
            'vaccinated' => $request->vaccinated ? 1 : 0,
            'image_url' => $request->image_url
        ]);

        return redirect('/cats')->with('success', 'Kitty updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('cats')->where('id', $id)->delete(); 
        return redirect('/cats')->with('success', 'Kitty deleted successfully');
    }
}
