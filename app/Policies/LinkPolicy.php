<?php

namespace App\Policies;

use App\Models\Link;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LinkPolicy
{

    /**
     * Determine whether the user can view the model.
     */
    public function accessAll(User $user, Link $link): Response
    {
        return $link->user->is($user)
            ? Response::allow()
            : Response::deny('Você não tem acesso a este link.');
    }
}
