<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(): View|Application|Factory
    {
        return view('profile',['user' => auth()->user()]);
    }

    public function update(ProfileRequest $request): RedirectResponse
    {
        /** @var  User $user */
        $user = auth()->user();
        $user->fill($request->validated())->save();

        return back()->with('message','Perfil atualizado com sucesso!');
        
    }
}
