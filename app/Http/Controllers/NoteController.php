<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return view('index', [
            "title" => "NepNote",
            "notes" => Note::orderBy('created_at')->get()
        ]);
    }
}
