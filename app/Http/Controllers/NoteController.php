<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $query = $user->notes()->with("tags");

        // Filter archived notes
        if ($request->query("filter") === "archived") {
            $query->where("is_archived", true);
        }

        // Filter by selected tag
        if ($request->filled("tag")) {
            $query->whereHas("tags", function ($tagQuery) use ($request) {
                $tagQuery->where("name", $request->query("tag"));
            });
        }

        // Search by title, content, or tag
        if ($request->filled("search")) {
            $search = $request->query("search");

            $query->where(function ($searchQuery) use ($search) {
                $searchQuery
                    ->where("title", "ILIKE", "%{$search}%")
                    ->orWhere("content", "ILIKE", "%{$search}%")
                    ->orWhereHas("tags", function ($tagQuery) use ($search) {
                        $tagQuery->where("name", "ILIKE", "%{$search}%");
                    });
            });
        }

        $notes = $query->get();

        $tags = \App\Models\Tag::whereHas("notes", function ($noteQuery) use ($user) {
            $noteQuery->where("user_id", $user->id);
        })->orderBy("name")->get();

        return view("notes.index", compact("notes", "tags"));
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
            "tags" => "nullable|string|max:1000",
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();

        $note = $user->notes()->create([
            "title" => $validated["title"],
            "content" => $validated["content"],
        ]);

        if (!empty($validated["tags"])) {
            $tagNames = array_map("trim", explode(",", $validated["tags"]));

            $tagNames = array_filter($tagNames);

            $tagIds = [];

            foreach ($tagNames as $tagName) {
                $tag = \App\Models\Tag::firstOrCreate([
                    "name" => $tagName,
                ]);

                $tagIds[] = $tag->id;
            }

            $note->tags()->sync($tagIds);
        }

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
            "tags" => "nullable|string|max:1000",
        ]);

        $note = Auth::user()->notes()->findOrFail($id);

        $note->update([
            "title" => $validated["title"],
            "content" => $validated["content"],
        ]);

        $tagIds = [];

        if (!empty($validated["tags"])) {
            $tagNames = array_map("trim", explode(",", $validated["tags"]));

            $tagNames = array_filter($tagNames);

            foreach ($tagNames as $tagName) {
                $tag = \App\Models\Tag::firstOrCreate([
                    "name" => $tagName,
                ]);

                $tagIds[] = $tag->id;
            }
        }

        $note->tags()->sync($tagIds);

        return redirect()->route("notes");
    }

    public function destroy($id)
    {
        $note = Auth::user()->notes()->findOrFail($id);

        $note->delete();

        return redirect()->route("notes");
    }

    public function archive($id)
    {
        $note = Auth::user()->notes()->findOrFail($id);

        $note->update([
            "is_archived" => true,
        ]);
        return redirect()->route("notes");
    }

    public function unarchive($id)
    {
        $note = Auth::user()->notes()->findOrFail($id);
        $note->update([
            "is_archived" => false,
        ]);

        return redirect()->route("notes");
    }
}
