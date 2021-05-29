<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gropu extends Model
{
    use HasFactory;
    protected $table = 'gropus';
    protected $primaryKey = 'id_gropus';
    protected $fillable = [
        'semestre', 'nameg', 'capacidad'
    ];

    public function asisten()
    {
    	return $this->hasOne('App\Models\Asisten', 'id_gropus');
    }

}
