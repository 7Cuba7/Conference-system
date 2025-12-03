<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConferenceRequest;
use App\Models\Conference;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ConferenceController extends Controller
{

    public function index(): View
    {
        $conferences = Conference::orderBy('date', 'desc')->paginate(10);

        return view('conferences.index', compact('conferences'));
    }


    public function create(): View
    {
        return view('conferences.create');
    }


    public function store(ConferenceRequest $request): RedirectResponse
    {
        Conference::create($request->validated());

        return redirect()->route('conferences.index')
            ->with('success', __('messages.conference_created'));
    }


    public function show(Conference $conference): View
    {
        return view('conferences.show', compact('conference'));
    }


    public function edit(Conference $conference): View
    {
        return view('conferences.edit', compact('conference'));
    }


    public function update(ConferenceRequest $request, Conference $conference): RedirectResponse
    {
        $conference->update($request->validated());

        return redirect()->route('conferences.index')
            ->with('success', __('messages.conference_updated'));
    }


    public function destroy(Conference $conference): RedirectResponse
    {
        $conference->delete();

        return redirect()->route('conferences.index')
            ->with('success', __('messages.conference_deleted'));
    }
}
