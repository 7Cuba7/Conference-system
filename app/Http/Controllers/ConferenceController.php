<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConferenceRequest;
use App\Models\Conference;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ConferenceController extends Controller
{
    /**
     * Display a listing of conferences
     *
     * @return View
     */
    public function index(): View
    {
        $conferences = Conference::orderBy('date', 'desc')->paginate(10);

        return view('conferences.index', compact('conferences'));
    }

    /**
     * Show the form for creating a new conference
     *
     * @return View
     */
    public function create(): View
    {
        return view('conferences.create');
    }

    /**
     * Store a newly created conference in database
     *
     * @param ConferenceRequest $request
     * @return RedirectResponse
     */
    public function store(ConferenceRequest $request): RedirectResponse
    {
        Conference::create($request->validated());

        return redirect()->route('conferences.index')
            ->with('success', __('messages.conference_created'));
    }

    /**
     * Display the specified conference
     *
     * @param Conference $conference
     * @return View
     */
    public function show(Conference $conference): View
    {
        return view('conferences.show', compact('conference'));
    }

    /**
     * Show the form for editing the specified conference
     *
     * @param Conference $conference
     * @return View
     */
    public function edit(Conference $conference): View
    {
        return view('conferences.edit', compact('conference'));
    }

    /**
     * Update the specified conference in database
     *
     * @param ConferenceRequest $request
     * @param Conference $conference
     * @return RedirectResponse
     */
    public function update(ConferenceRequest $request, Conference $conference): RedirectResponse
    {
        $conference->update($request->validated());

        return redirect()->route('conferences.index')
            ->with('success', __('messages.conference_updated'));
    }

    /**
     * Remove the specified conference from database
     *
     * @param Conference $conference
     * @return RedirectResponse
     */
    public function destroy(Conference $conference): RedirectResponse
    {
        $conference->delete();

        return redirect()->route('conferences.index')
            ->with('success', __('messages.conference_deleted'));
    }
}
