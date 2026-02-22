<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produ extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'catego_id'
    ];

    public function catego(){
        return $this->belongsTo(Catego::class);
    }
}
