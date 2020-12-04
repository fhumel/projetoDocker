<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = [ 'transaction' ];

    protected $fillable = [
        'id', 'payer', 'payee', 'value',
    ];
}
