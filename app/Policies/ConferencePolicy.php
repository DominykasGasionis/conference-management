<?php

namespace App\Policies;

use App\Models\Conference;
use App\Models\User;

class ConferencePolicy
{
    public function view(User $user, Conference $conference): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Conference $conference): bool
    {
        return $user->id === $conference->user_id;
    }

    public function delete(User $user, Conference $conference): bool
    {
        return $user->id === $conference->user_id;
    }
}
