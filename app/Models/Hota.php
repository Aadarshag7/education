<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hota extends Model
{
    use HasFactory;
    protected $fillable = [
        'game',
        'price',
        'user_id'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
