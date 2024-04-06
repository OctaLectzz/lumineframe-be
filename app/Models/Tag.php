<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function photos()
    {
        return $this->belongsToMany(Photo::class, 'photo_tag');
    }
}
