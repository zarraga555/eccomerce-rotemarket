<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Persons
{
    use HasFactory;
    protected $table = "persons";// <-- El nombre personalizado
}
