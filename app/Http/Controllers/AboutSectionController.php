<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $about = About::all();
        
        return view('dashboard.section.pages.about.index', [
            'about' => $about
        ]);
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
        //
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
        $rules = [
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ];

        $validatedData = $request->validate($rules);

        $about = About::findOrFail($id);

        if ($request->hasFile('image')) {
            
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }

           
            $imagePath = $request->file('image')->store('image', 'public');
            $validatedData['image'] = $imagePath;
        } else {
           
            unset($validatedData['gambar']);
        }

        $about->update($validatedData);

        return redirect('/dashboard/pages/about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
