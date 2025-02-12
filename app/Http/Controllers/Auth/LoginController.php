<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index(): View|Factory|Application
    {
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request): RedirectResponse
    {
        if ($request->attempt()) {
            return to_route('dashboard');
        }

        return back()->with('message', 'E-mail ou senha incorretos!')->withInput();
    }
}
