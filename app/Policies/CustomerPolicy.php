<?php

namespace App\Policies;

use App\Models\Customers;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CustomerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_customers');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Customers $customer): bool
    {
        return $user->can('view_customers');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_customers');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Customers $customer): bool
    {
        return $user->can('update_customers');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Customers $customer): bool
    {
        return $user->can('delete_customers');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Customers $customer): bool
    {
        return $user->can('{{ Restore }}');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Customers $customer): bool
    {
        return $user->can('{{ ForceDelete }}');
    }
}
