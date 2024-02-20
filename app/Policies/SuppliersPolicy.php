<?php

namespace App\Policies;

use App\Models\Suppliers;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SuppliersPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_suppliers');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Suppliers $suppliers): bool
    {
        return $user->can('view_suppliers');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_suppliers');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Suppliers $suppliers): bool
    {
        return $user->can('update_suppliers');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Suppliers $suppliers): bool
    {
        return $user->can('delete_suppliers');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Suppliers $suppliers): bool
    {
        return $user->can('{{ Restore }}');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Suppliers $suppliers): bool
    {
        return $user->can('{{ ForceDelete }}');
    }
}
