<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rame extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'photo'
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

}
