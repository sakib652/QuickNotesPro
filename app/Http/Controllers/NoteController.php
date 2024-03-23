<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::where('user_id', auth()->id())->get();
        $seo = DB::table('seoproperties')->where('pageName', '=', 'index')->first();
        return view('notes.index', compact('notes','seo'));
    }

    public function create()
    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'create')->first();
        return view('notes.create', ['seo' => $seo]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $note = new Note();
        $note->title = $request->title;
        $note->content = $request->content;
        $note->user_id = auth()->id();
        $note->save();

        return redirect()->route('notes.index')->with('success', 'Note created successfully.');
    }

    public function edit(Note $note)
    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'edit')->first();
        return view('notes.edit', compact('note'), ['seo' => $seo]);
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return redirect()->route('notes.index')->with('success', 'Note updated successfully.');
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index')->with('success', 'Note deleted successfully.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $notes = Note::where('title', 'like', "%$query%")
            ->orWhere('content', 'like', "%$query%")
            ->get();

        $seo = DB::table('seoproperties')->where('pageName', '=', 'index')->first();

        return view('notes.index', compact('notes','seo'));
    }
}
