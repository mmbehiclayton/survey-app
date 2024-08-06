<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SurveySubmitted;

class SurveyController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:255',
            'assistance' => 'required|string',
            'case_number' => 'nullable|string|max:255',
            'documents.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx',
        ]);

        $documents = [];
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $file) {
                $documents[] = $file->store('documents', 'public');
            }
        }

        $survey = Survey::create([
            'name' => $request->name,
            'email' => $request->email,
            'country' => $request->country,
            'assistance' => $request->assistance,
            'case_number' => $request->case_number,
            'documents' => $documents,
        ]);

        // Send emails to the specified addresses
        Mail::to(['mmbehiclayton@gmail.com', 'qoguta@gmail.com'])
            ->send(new SurveySubmitted($survey));

        return redirect()->back()->with('success', 'Survey submitted successfully!');
    }
}
