<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvogadoAreaAtuacao extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'advogado_area_atuacao';
}
