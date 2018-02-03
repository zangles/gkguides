<?php

namespace App\Policies;

use App\User;
use App\Guide;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class GuidePolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        return ($user->hasRole(User::ROLE_ADMIN));
    }

    /**
     * Determine whether the user can view the guide.
     *
     * @param  \App\User  $user
     * @param  \App\Guide  $guide
     * @return mixed
     */
    public function view(User $user, Guide $guide)
    {
        return true;
    }

    /**
     * Determine whether the user can create guides.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return !Auth::guest();
    }

    /**
     * Determine whether the user can update the guide.
     *
     * @param  \App\User  $user
     * @param  \App\Guide  $guide
     * @return mixed
     */
    public function update(User $user, Guide $guide)
    {
        return ($guide->user_id == $user->id);
    }

    /**
     * Determine whether the user can delete the guide.
     *
     * @param  \App\User  $user
     * @param  \App\Guide  $guide
     * @return mixed
     */
    public function delete(User $user, Guide $guide)
    {
        return ($guide->user_id == $user->id);
    }
}
