<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return response()->json($reviews);
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
        $validateData = $request->validate([
            'jewelry_id' => 'required|integer|exists:jewelries,id',
            'customer_id' => 'required|integer|exists:customers,id',
            'note' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
            'date' => 'required|date'
        ]);
        $review = Review::create($validateData);
        return response()->json($review, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Review::find($id);
        return response()->json($review);
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
        $validateData = $request->validate([
            'jewelry_id' => 'required|integer|exists:jewelries,id',
            'customer_id' => 'required|integer|exists:customers,id',
            'note' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
            'date' => 'required|date'
        ]);
        $review = Review::find($id);
        $review->update($validateData);
        return response()->json($review, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::find($id);
        $review->delete();
        return response()->json(null, 204);
    }
}
