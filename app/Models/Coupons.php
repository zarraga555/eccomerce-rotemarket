<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupons extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'code',
        'percentage',
        'cash',
        'created_by',
        'coupon_end_date',
        'maximum_use_limit',
        'state'
    ];

    public function Users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creat_by');
    }
}
