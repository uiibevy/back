<?php

namespace App\Policies;

use App\Models\identity;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class identityPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, identity $identity)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, identity $identity)
    {
    }

    public function delete(User $user, identity $identity)
    {
    }

    public function restore(User $user, identity $identity)
    {
    }

    public function forceDelete(User $user, identity $identity)
    {
    }
}
