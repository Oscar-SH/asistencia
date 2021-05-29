<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    protected $primaryKey = 'id_subjects';
    protected $fillable = [
        'nmateria', 'clave'
    ];

    public function asisten()
    {
    	return $this->hasOne('App\Models\Asisten', 'id_subjects');
    }

}
