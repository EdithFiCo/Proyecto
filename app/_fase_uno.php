<?php

namespace Siropa;

use Illuminate\Database\Eloquent\Model;

class _fase_uno extends Model
{
    protected $table = '_fase_uno';

    protected $fillable =
        [
            'numero',
            'permiso_check',
            'aceptado',
            'path_file_pdf',
            'primera_carga',
            'nota'
        ];
    public function proyectos()
    {
        return $this->belongsToMany('Siropa\proyecto','carga_file_OP');
    }

}
