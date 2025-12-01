<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    /**
     * Display a listing of conferences
     */
    public function index()
    {
        $conferences = Conference::orderBy('date', 'desc')->paginate(12);
        return view('conferences.index', compact('conferences'));
    }

    /**
     * Show the form for creating a new conference
     */
    public function create()
    {
        return view('conferences.create');
    }

    /**
     * Store a newly created conference in storage
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:8',
            'description' => 'required|string|min:20',
            'date' => 'required|date|after:today',
            'address' => 'required|string|min:3',
            'participants' => 'nullable|integer|min:20',
        ]);

        $validated['user_id'] = auth()->id();

        Conference::create($validated);

        return redirect()->route('conferences.index')
            ->with('success', __('conferences.messages.created'));
    }

    /**
     * Display the specified conference
     */
    public function show(Conference $conference)
    {
        return view('conferences.show', compact('conference'));
    }

    /**
     * Show the form for editing the specified conference
     */
    public function edit(Conference $conference)
    {
        $this->authorize('update', $conference);

        return view('conferences.edit', compact('conference'));
    }

    /**
     * Update the specified conference in storage
     */
    public function update(Request $request, Conference $conference)
    {
        $this->authorize('update', $conference);

        $validated = $request->validate([
            'title' => 'required|string|min:8',
            'description' => 'required|string|min:20',
            'date' => 'required|date|after:today',
            'address' => 'required|string|min:3',
            'participants' => 'nullable|integer|min:20',
        ]);

        $conference->update($validated);

        return redirect()->route('conferences.show', $conference)
            ->with('success', __('conferences.messages.updated'));
    }

    /**
     * Remove the specified conference from storage
     */
    public function destroy(Conference $conference)
    {
        $this->authorize('delete', $conference);

        $conference->delete();

        return redirect()->route('conferences.index')
            ->with('success', __('conferences.messages.deleted'));
    }
}
