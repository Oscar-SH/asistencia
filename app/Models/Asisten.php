<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asisten extends Model
{
    use HasFactory;
    protected $table = 'asistens';
    protected $primaryKey = 'id_asistens';
    protected $fillable = [
        'id_asistens','id_teachers','id_students','id_gropus','id_subjects' // Aquí hay que colocar todos los campos de la migración Listo
    ];

    
    // Crea una función de estas para cada clave foránea
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher','id_teachers');
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Student','id_students');
    }

    public function gropu()
    {
        return $this->belongsTo('App\Models\Gropu','id_gropus');
    }

    public function subjet()
    {
        return $this->belongsTo('App\Models\Subject','id_subjects');
    }

}