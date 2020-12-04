<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = [ 'wallet' ];

    protected $fillable = [
        'userId', 'money',
    ];
}
