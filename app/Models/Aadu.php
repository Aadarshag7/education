<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aadu extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'price'
    ];
}
