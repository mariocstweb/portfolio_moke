<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'is_published',
        'address',
        'latitude',
        'longitude',
        'user_id'
    ];

    public function user()
    {

        /* UN SOLO USER */
        return $this->belongsTo(User::class);
    }
}
