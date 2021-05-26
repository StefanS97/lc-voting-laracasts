<?php

namespace App\Policies;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class IdeaPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Idea $idea)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Idea $idea)
    {
        return $user->id === $idea->user_id 
               && now()->subHour() <= $idea->created_at;
    }

    public function delete(User $user, Idea $idea)
    {
        return $user->id === $idea->user_id || $user->isAdmin();
    }

    public function restore(User $user, Idea $idea)
    {
        //
    }

    public function forceDelete(User $user, Idea $idea)
    {
        //
    }
}
