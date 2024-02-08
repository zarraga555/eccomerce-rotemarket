<?php

namespace App\Policies;

use App\Models\Units;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UnitsPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_units');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Units $units): bool
    {
        return $user->can('view_units');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_units');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Units $units): bool
    {
        return $user->can('update_units');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Units $units): bool
    {
        return $user->can('delete_units');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Units $units): bool
    {
        return $user->can('{{ Restore }}');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Units $units): bool
    {
        return $user->can('{{ ForceDelete }}');
    }
}
