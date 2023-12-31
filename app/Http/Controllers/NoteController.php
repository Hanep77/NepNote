<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return view('index', [
            "title" => "NepNote",
            "notes" => auth()->user()->notes
        ]);
    }

    public function show(Note $note)
    {
        return view('show', [
            "title" => "Note Details",
            "note" => $note
        ]);
    }

    public function create()
    {
        return view('create', [
            "title" => "Create"
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|max:255",
            "content" => "required"
        ]);

        $validated["user_id"] = auth()->user()->id;

        if ($request->category_id != "Choose Category") {
            $validated["category_id"] = $request->category_id;
        }

        Note::create($validated);

        return redirect('/')->with(['success' => 'New note created.']);
    }

    public function edit(Note $note)
    {
        return view('edit', [
            "title" => "Note Details",
            "note" => $note
        ]);
    }

    public function update(Request $request, Note $note)
    {
        $validated = $request->validate([
            "title" => "required|max:255",
            "content" => "required"
        ]);

        if ($request->category_id == "Choose Category") {
            $validated["category_id"] = null;
        } else {
            $validated["category_id"] = $request->category_id;
        }

        $note->update($validated);

        return redirect('/notes/' . $note->id)->with('success', 'The note was updated successfully');
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect('/')->with('success', 'the note was deleted successfully');
    }
}
