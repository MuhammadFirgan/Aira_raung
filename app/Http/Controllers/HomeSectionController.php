<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::all();
        
        return view('dashboard.section.pages.home.index', [
            'home' => $home
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'tagline' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ];

        $validatedData = $request->validate($rules);

        $home = Home::findOrFail($id);

        if ($request->hasFile('image')) {
            
            if ($home->image) {
                Storage::disk('public')->delete($home->image);
            }

           
            $imagePath = $request->file('image')->store('image', 'public');
            $validatedData['image'] = $imagePath;
        } else {
           
            unset($validatedData['gambar']);
        }

        $home->update($validatedData);

        return redirect('/dashboard/pages/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
