<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class LinkController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Application|Factory
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request): RedirectResponse
    {
        /** @var User $user */
        $user = auth()->user();
        $user->links()->create($request->validated());

        return to_route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link): View|Application|Factory
    {
        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link): RedirectResponse
    {
        $link->fill($request->validated())->save();

        return to_route('dashboard')->with('message', 'Link alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link): RedirectResponse
    {
        $link->delete();

        return to_route('dashboard')->with('message', 'Link excluído com sucesso!');
    }

    public function up(Link $link): RedirectResponse
    {
        $link->moveUp();

        return to_route('dashboard');
    }

    public function down(Link $link): RedirectResponse
    {
        $link->moveDown();

        return to_route('dashboard');

    }
}
