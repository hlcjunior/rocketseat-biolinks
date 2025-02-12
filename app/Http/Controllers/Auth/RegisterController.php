<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function index(): View|Application|Factory
    {
        return view('auth.register');
    }

    public function register( RegisterRequest $request): RedirectResponse
    {
        if($request->tryToRegister()){
            return to_route('dashboard');
        }

        return back()->with('message', 'Erro ao tentar cadastrar!')->withInput();
    }
}
