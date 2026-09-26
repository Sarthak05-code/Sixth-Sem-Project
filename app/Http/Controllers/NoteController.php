<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Auth::user()->notes;

        return view("notes.index", compact("notes"));
    }

    public function create()
    {
        return view("notes.create");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|string|max:255",
            "content" => "required|string",
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();

        $user->notes()->create([
            "title" => $validated["title"],
            "content" => $validated["content"],
        ]);

        return redirect()->route("notes");
    }

    public function edit($id)
    {
        $note = Auth::user()->notes()->findOrFail($id);
        return view("notes.edit", compact("note"));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "title" => "required|string|max:255",
            "content" => "required|string",
        ]);

        $note = Auth::user()->notes()->findOrFail($id);

        $note->update([
            "title" => $validated["title"],
            "content" => $validated["content"],
        ]);

        return redirect()->route("notes");
    }

    public function destroy($id) {
        $note = Auth::user()->notes()->findOrFail($id);

        $note->delete();

        return redirect()->route('notes');
    }
}
