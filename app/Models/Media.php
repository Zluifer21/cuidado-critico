<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

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

    public function url():Attribute
    {
        return Attribute::make(
            get: fn (string $value) => url(Storage::url($value)),
        );
    }
}
