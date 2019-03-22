<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cliente extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];
    // protected $fillable = [
    //     'nome',
    //     'email',
    //     'telefone1',
    //     'telefone2',
    // ];
}
