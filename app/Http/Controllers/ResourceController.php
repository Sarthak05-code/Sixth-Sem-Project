<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index() {
        $resources = Resource::with(['user' , 'institution'])->latest()->get();

        return view('resources.index' , compact('resources'));
    }


    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'description' => ['nullable', 'string'],
        'category' => ['required', 'string', 'max:255'],
        'url' => ['nullable', 'url', 'max:255'],
        'file' => [
            'nullable',
            'file',
            'mimes:pdf,doc,docx,ppt,pptx,jpg,jpeg,png',
            'max:10240',
        ],
    ]);

    if (!$request->hasFile('file') && !$request->filled('url')) {
        return back()
            ->withErrors([
                'file' => 'Please provide either a resource URL or upload a file.',
            ])
            ->withInput();
    }

    if ($request->hasFile('file')) {
        $validated['file_path'] = $request->file('file')
            ->store('resources', 'public');
    }

    unset($validated['file']);

    $validated['user_id'] = auth()->id();
    $validated['institution_id'] = auth()->user()->institution_id;

    Resource::create($validated);

    return redirect()
        ->route('resources.index')
        ->with('success', 'Resource created successfully.');
}
}
