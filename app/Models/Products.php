<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected  $fillable = [
        'name',
        'description',
        'sku',
        'purchase_price',
        'margin_of_price',
        'sale_price',
        'status',
        'categoryDepartment_id',
        'categories_id',
        'subcategories_id',
        'units_id',
        'brands_id',
        'created_by'
    ];

    public function categoryDepartments() : BelongsTo
    {
        return $this->belongsTo(CategoryDepartment::class, 'categoryDepartment_id');
    }

    public function categories() : BelongsTo
    {
        return $this->belongsTo(Categories::class, 'categories_id');
    }
    public function subCategories() : BelongsTo
    {
        return $this->belongsTo(SubCategories::class, 'subcategories_id');
    }

    public function units() : BelongsTo
    {
        return $this->belongsTo(Units::class, 'units_id');
    }

    public function brands() : BelongsTo
    {
        return $this->belongsTo(Brands::class, 'brands_id');
    }

    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
