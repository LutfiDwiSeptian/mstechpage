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
            'company_name' => 'nullable|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
        ]);
        Form::create($validated);
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
