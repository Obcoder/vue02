<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;

    protected $fillable = [
        'flag',
        'coatofarms',
        'name',
        'area',
        'callingcode',
        'iso3166code'
    ];
}
