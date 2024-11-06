<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function updateUser(Request $request, string $id)
    {
        $rules = [
            'username' => 'required',
            'password' => 'required|min:8',
        ];
        $validatedData = $request->validate($rules);

        $contact = User::findOrFail($id);

        $contact->update($validatedData);

        return redirect('/dashboard');

    }
}
