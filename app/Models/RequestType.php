<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestType extends Model
{
    public $table = 'request_types';

    public $fillable = [
        'name',
    ];
}
