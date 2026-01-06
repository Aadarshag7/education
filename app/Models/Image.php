<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'rame_id',
        'path'
    ];

    public function rame(){
        return $this->belongsTo(Rame::class);
    }
}
