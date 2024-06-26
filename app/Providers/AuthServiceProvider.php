<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Brands;
use App\Models\Coupons;
use App\Models\Categories;
use App\Models\CategoryDepartment;
use App\Models\Customers;
use App\Models\Employees;
use App\Models\Products;
use App\Models\SubCategories;
use App\Models\Suppliers;
use App\Models\Units;
use App\Models\User;
use App\Policies\BrandsPolicy;
use App\Policies\CategoriesPolicy;
use App\Policies\CategoryDepartmentPolicy;
use App\Policies\CustomerPolicy;
use App\Policies\ProductsPolicy;
use App\Policies\RolePolicy;
use App\Policies\SubCategoriesPolicy;
use App\Policies\SuppliersPolicy;
use App\Policies\UnitsPolicy;
use App\Policies\UserPolicy;
use App\Policies\CouponsPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class                 => UserPolicy::class,
        Role::class                 => RolePolicy::class,
        Categories::class           => CategoriesPolicy::class,
        CategoryDepartment::class   => CategoryDepartmentPolicy::class,
        SubCategories::class        => SubCategoriesPolicy::class,
        Brands::class               => BrandsPolicy::class,
        Products::class             => ProductsPolicy::class,
        Units::class                => UnitsPolicy::class,
        Coupons::class              => CouponsPolicy::class,
        Customers::class            => CustomerPolicy::class,
        Suppliers::class            => SuppliersPolicy::class,
        Employees::class            => SuppliersPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
