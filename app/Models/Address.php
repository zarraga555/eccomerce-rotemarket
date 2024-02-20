<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'status',
        'address_one',
        'address_two',
        'country',
        'state',
        'city',
        'zip_code',
        'user_id'
    ];

    public function Users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'creat_by');
    }
}
