<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdentityType extends Model
{
    public $table = 'identity_types';

    public $fillable = [
        'name',
        'code'
    ];
}
