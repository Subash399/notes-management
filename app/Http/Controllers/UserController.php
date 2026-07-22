<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showForm()
    {
        return view('user');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'password' => 'required|string|min:6|max:255',
        ]);

        return response()->json([
            'message' => 'Validated successfully',
            'data' => $validated,
        ]);
    }
}

