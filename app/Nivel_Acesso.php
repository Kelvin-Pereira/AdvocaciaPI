<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nivel_Acesso extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'nivel_acessos';
}
