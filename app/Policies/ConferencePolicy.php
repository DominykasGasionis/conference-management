<?php

namespace App\Policies;

use App\Models\Conference;
use App\Models\User;

class ConferencePolicy
{
    /**
     * Determine whether the user can view the conference.
     */
    public function view(User $user, Conference $conference): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create conferences.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the conference.
     */
    public function update(User $user, Conference $conference): bool
    {
        return $user->id === $conference->user_id;
    }

    /**
     * Determine whether the user can delete the conference.
     */
    public function delete(User $user, Conference $conference): bool
    {
        return $user->id === $conference->user_id;
    }
}
