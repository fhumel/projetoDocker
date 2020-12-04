<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Carteira extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = [ 'wallet' ];

    protected $fillable = [
        'id', 'userId', 'value',
    ];
}
