<?php

namespace App\Policies;

use App\Models\User;
use App\Models\brands;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class BrandsPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_brands');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, brands $brands): bool
    {
        return $user->can('view_brands');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_brands');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, brands $brands): bool
    {
        return $user->can('update_brands');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, brands $brands): bool
    {
        return $user->can('delete_brands');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, brands $brands): bool
    {
        return $user->can('{{ Restore }}');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, brands $brands): bool
    {
        return $user->can('{{ ForceDelete }}');
    }
}
