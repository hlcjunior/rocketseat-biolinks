<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class DashboardController extends Controller
{
    public function __invoke(): View|Application|Factory
    {
        /** @var User $user */
        $user = auth()->user();

        return view('dashboard', [
            'links' => $user->links()
                ->orderBy('sort')
                ->get()
        ]);
    }
}
