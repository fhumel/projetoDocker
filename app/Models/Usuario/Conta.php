<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = [ 'wallet' ];

    protected $fillable = [ 'id', 'tipo' ];
}
