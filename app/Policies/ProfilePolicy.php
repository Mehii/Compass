<?php

namespace App\Policies;

use App\Models\Car;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Profile $profile
     * @return mixed
     */
    public function view(User $user, Profile $profile)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @param Car $car
     * @return mixed
     */
    public function create(User $user, Car $car): bool
    {

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Profile $profile
     * @return mixed
     */
    public function update(User $user, Profile $profile): bool
    {
        return $user->id==$profile->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Profile $profile
     * @return mixed
     */
    public function delete(User $user, Profile $profile)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Profile $profile
     * @return mixed
     */
    public function restore(User $user, Profile $profile)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Profile $profile
     * @return mixed
     */
    public function forceDelete(User $user, Profile $profile)
    {
        //
    }
}
