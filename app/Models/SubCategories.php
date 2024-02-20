<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategories extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'name',
        'description',
        'categories_id'
    ];
    public function Categories() : BelongsTo {
        return $this->belongsTo(Categories::class, 'categories_id');
    }
}
