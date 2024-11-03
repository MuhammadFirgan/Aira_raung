<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::all();
        return view('dashboard.section.pages.contact.index', [
            'contact' => $contact
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
 
        $rules = [
            'address' => 'required|max:255',
            'no_wa' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        $contact = Contact::findOrFail($id);
        if (!$contact) {
          redirect('/dashboard/pages/contact');
        }
        $contact->update($validatedData);

        return redirect('/dashboard/pages/contact');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
