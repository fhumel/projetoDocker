<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = [ 'carteira' ];

    protected $fillable = [ 'tipo' ];
}
