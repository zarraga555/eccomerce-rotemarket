<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'name',
        'description',
        'categoryDepartment_id'
    ];
    public function CategoryDepartment() : BelongsTo {
        return $this->belongsTo(CategoryDepartment::class, 'categoryDepartment_id');
    }

}
