<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use function Pest\Laravel\get;

class NoteController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::where('user_id',Auth::id())->get();  
        return view('notes',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $notes = Note::where('user_id',Auth::id())->get();  
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'deadline' =>['nullable','date'],
        ]);

        Note::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'user_id' => Auth::id(),
            'status' =>'pending',
            'deadline'=>$validated['deadline'],
        ]);

        return redirect()->route('notes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        if($note->user_id === Auth::id()){
            return view('edit',compact('note'));
        }
        abort(403);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
