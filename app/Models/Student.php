<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'id_students';
    protected $fillable = [
        'name', 'ncontrol', 'lname', 'status'
    ];

    public function asisten()
    {
    	return $this->hasOne('App\Models\Asisten', 'id_students');
    }

}
