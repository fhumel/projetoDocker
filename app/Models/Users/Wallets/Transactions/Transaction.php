<?php

namespace App\Models\User\Wallets\Transactions;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = [ 'transactions' ];

    protected $fillable = [
        'id', 'payer', 'payee', 'value',
    ];
}
