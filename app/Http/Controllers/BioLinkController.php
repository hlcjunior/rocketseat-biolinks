<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class BioLinkController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(User $user): View|Application|Factory
    {
        return view('bio-links', compact('user'));
    }
}
