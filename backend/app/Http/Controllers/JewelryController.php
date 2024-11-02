<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jewelry;

class JewelryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jewelries = Jewelry::all();
        return response()->json($jewelries);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required|max:255',
            'description'=> 'required',
            'categorie_id'=> 'required|integer',
            'price'=> 'required|numeric',
            'materiel'=> 'required|max:255',
            'brand'=> 'required|max:255',
        ]);
        $jewelry = Jewelry::create($validatedData);
        return response()->json($jewelry , 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jewelry = Jewelry::find($id);
        return response()->json($jewelry);
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
        $validatedData = $request->validate([
            'name'=> 'required|max:255',
            'description'=> 'required',
            'categorie_id'=> 'required|integer',
            'price'=> 'required|numeric',
            'materiel'=> 'required|max:255',
            'brand'=> 'required|max:255',
        ]);
        $jewelry = Jewelry::find($id);
        $jewelry->update($validatedData);
        return response()->json($jewelry, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jewelry = Jewelry::find($id);
        $jewelry->delete();
        return response()->json(null, 204);
    }
}
