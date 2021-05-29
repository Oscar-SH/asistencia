<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $primaryKey = 'id_teachers';
    protected $fillable = [
        'namet', 'lnamet', 'horario', 'contacto'
    ];

    public function asisten()
    {
    	return $this->hasOne('App\Models\Asisten', 'id_teachers');
    } 

}
