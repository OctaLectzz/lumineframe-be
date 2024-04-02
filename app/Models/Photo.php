<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tags()
    {
        return $this->hasMany(Tag::class, 'photo_tag', 'tag_id', 'photo_id');
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function collections()
    {
        return $this->hasMany(Collection::class, 'photo_collection', 'collection_id', 'photo_id');
    }
}
