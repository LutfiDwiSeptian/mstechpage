<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'line_of_business' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'required|string|max:255',
        ]);

        // Backward compatibility: if an older form posted lines_of_business, map it.
        if (!$request->has('line_of_business') && $request->has('lines_of_business')) {
            $validated['line_of_business'] = $request->input('lines_of_business');
        }

        Form::create($validated);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
