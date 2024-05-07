<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persons extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'type_user',
        'company_name_supplier',
        'identification_number',
        'type_identification',
        'name_or_legal_representative_name',
        'lastname_or_or_legal_representative_lastname',
        'email_or_legal_representative_email',
        'phone_or_legal_representative_phone',
        'mobile_or_legal_representative_mobile',
        'birthdate_or_legal_representative_birthdate',
        'credit_limit_or_legal_representative_credit_limit',
        'pay_term_type',
        'user_id'
    ];

//    public static function where(string $column, string $condition, string $search)
//    {
//        return Persons::where($column, $condition, $search);
//    }

    public function Users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
