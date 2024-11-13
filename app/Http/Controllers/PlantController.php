<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $plants = Plant::all();
        return view('plants.index', compact('plants'));
    }
    
    public function indexAPI()
    {
        return Plant::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plants = Plant::all();
        return view('plants.create', compact('plants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Plant::create($request -> all());
        return redirect('/');
    }
    
     public function storeAPI(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'image' => 'required|string',
            'description' => 'required|string'
        ]);
        Plant::create($validateData);
        return 'Addded!';
    }

    /**
     * Display the specified resource.
     */
    public function show(Plant $plant)
    {
        return view('plants.show', compact('plant'));
    }
    
     public function showAPI($plant)
    {
        return Plant::findOrFail($plant);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plant $plant)
    {
        return view('plants.edit', compact('plant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plant $plant)
    {
        $plant -> update($request -> all());
        return redirect('/');
    }

    public function updateAPI(Request $request, $plant)
    {
        $plant = Plant::findOrFail($plant);
        $validateData = $request-> validate([
            'name' => 'required|string',
            'image' => 'required|string',
            'description' => 'required|string'
        ]);
        $plant -> update($validateData);
        return 'Updated!';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plant $plant)
    {
        $plant -> delete();
        return redirect('/');
    }

    public function destroyAPI($plant)
    {
        $plant = Plant::findOrFail($plant);
        $plant -> delete();

        return 'Deleted!';
    }
}
