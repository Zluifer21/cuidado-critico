<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
use SoftDeletes;

    public $table = 'medias';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = ['url', 'name', 'medias_type', 'medias_id', 'deleted_at', 'created_at', 'updated_at'];



    public function medias()
    {
        return $this->morphTo();
    }
}
