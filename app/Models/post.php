<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'image',
        'user_id',
        'tagged_person_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
   
}
