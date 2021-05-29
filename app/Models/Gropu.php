<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gropu extends Model
{
    use HasFactory;
    protected $fillable = [
        'semestre', 'nameg', 'capacidad'
    ];
}
