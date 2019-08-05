<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Postulante extends Model
{

    use SoftDeletes;

    public $table = 'postulante';

    public $timestamps = false;


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'ci',
        'nombre',
        'apellido',
        'sexo',
        'fecha_nac',
        'nacionalidad',
        'telefono',
        'vivienda',
        'profesion',
        'lugar_trabajo',
        'nfamilia',
        'napte',
        'ingresof',
        'lugar_vivienda',
        'monto_apagar',
        'email',
  
    ];

 





}
