<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompraPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return !$user->isAdmin();
    }
}
